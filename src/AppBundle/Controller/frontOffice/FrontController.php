<?php

namespace AppBundle\Controller\frontOffice;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Event;
use AppBundle\Entity\Participer;
use FOS\UserBundle\Model\UserInterface;

class FrontController extends Controller
{
    /**
     * @Route("/resa/{id}", name="front_resa_event", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function indexAction(Event $Event)
    {
        $addForm = $this->createCustomForm($Event->getIdEvent(), 'POST', 'front_resa_panier_add');

        // On rend la vue
        return $this->render('@App/frontOffice/seatEvent.html.twig', ['Event' => $Event, 'add_form' => $addForm->createView()]);
    }

    /**
     * @Route("/resa/panier/add/{id}", name="front_resa_panier_add", requirements={"id" = "\d+"})
     */
    public function ajouterPanierAction(Request $request, Event $Event)
    {
        // Création du formulaire personnalisé
        $form = $this->createCustomForm($Event->getIdEvent(), 'POST', 'front_resa_panier_add');
        // Récupère la request du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Tableau avec les détails de la réservation
            $reservation = array();
            //On récupère le contenu de la reservation
            $content = $request->get('panier');
            if (!empty($content)) {
                //Décode le contenu au format JSON pour le transformer en tableau
                $reservation = json_decode($content, true); // 2nd param to get as array
            }

            //On génère la variable de SESSION qui contiendra la réservation
            $this->generatePanier($request, $reservation);

            // Flash message
            $this->addFlash('success', 'Réservation ajoutée avec succès.');

            return $this->redirectToRoute('front_resa_panier');

        }

        return $this->render('@App/frontOffice/panierEvent.html.twig');
    }

    /**
     * @Route("/resa/panier", name="front_resa_panier")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function panierAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());

        //Variable contenant tout les idEvent de la réservation
        $idEventPanier = $this->getIdEventPanier($session->get('panier'));

        $em = $this->getDoctrine()->getManager();
        $Events = $em->getRepository('AppBundle:Event')->findArray(array_keys($idEventPanier)); //Query qui récupère les Events en fonction de l'idEvent pour l'affichage dans la vue panier

        return $this->render('@App/frontOffice/panierEvent.html.twig', ['Events' => $Events,
                                                                        'panier' => $session->get('panier')]);
//        return $this->render('@App/frontOffice/panierEvent.html.twig', ['panier' => $session->get('panier')]);
    }

    /**
     * @Route("/resa/panier/delete/{id}/{seat}", name="front_resa_panier_delete", requirements={"id" = "\d+", "seat" = "\d+"})
     * @param Request $request
     * @param Event $Event
     * @param $seat
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function supprimerAction(Request $request, Event $Event, $seat)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        //Pour chaque réservation on contrôle l'idEvent et le n° de la place
        foreach ($panier as $event) {
            //Si la clé "idEvent" et "seat" existent dans le tableau 'panier'
            if (array_key_exists("idEvent", $event) AND array_key_exists("seat", $event)) {
                //Si les valeurs correspondent à la place que l'on veut supprimer
                if ($event["idEvent"] == $Event->getIdEvent() && $event["seat"] == $seat) {
                    //Position de l'élément dans le tableau $panier
                    $key = array_search($event, $panier);
                    //Suppression de la réservation dans la SESSION 'panier'
                    unset($panier[$key]);
                }
            }
        }

        //Actualise la SESSION 'panier'
        $session->set('panier', $panier);
        // Flash message
        $this->addFlash('success', 'Réservation supprimée avec succès.');

        return $this->redirectToRoute('front_resa_panier');
    }

    /**
     * @Route("/resa/panier/validate", name="front_resa_panier_validate")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function validationAction(Request $request)
    {
        //Get Doctrine
        $em = $this->getDoctrine()->getManager();

        //Récupération de l'utilisateur
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        //On récupère la variable SESSION
        $session = $request->getSession();

        //On définit la SESSION 'panier'
        if (!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');

        //Insert chaque réservation dans la BDD
        foreach ($panier as $event) {
            //Création de l'objet Participer pour l'insertion en BDD
            $participer = new Participer();
            $participer->setIdPersonne($user);
            $Event = $em->getRepository('AppBundle:Event')->find($event["idEvent"]);
            $participer->setIdEvent($Event);
            $participer->setNumPlace($event["seat"]);
            $participer->setHtml_id($event["html_id"]);
            $participer->setPrice($event["price"]);
            $em->persist($participer);
            $em->flush();
        }

        //Supprime la session 'panier'
        $session->remove('panier');

        // Flash message
        $this->addFlash('validate_panier', 'Merci d\'avoir éffectué votre réservation sur TickeNet.');

        return $this->redirectToRoute('front_homepage');
    }

    /**
     * @Route("/resa/{id}/bookedSeat", name="front_resa_booked_seat")
     * @param Request $request
     * @return JsonResponse
     */
    public function getBookedSeat(Request $request, Event $Event)
    {
        // Si c'est une requête Ajax (vue /resa/{id})
        if ($request->isXmlHttpRequest()) {

            // Récupération de l'idEvent de l'événement affiché
            $idEvent = $Event->getIdEvent();

            // Get Doctrine
            $em = $this->getDoctrine()->getManager();

            // Récupération de l'objet Participer selon l'idEvent
            $seatsBooked = $em->getRepository('AppBundle:Participer')->findBy(array('idEvent' => $idEvent), array('html_id' => 'desc'));
            $seat = [];
            // Construction d'un tableau contenant uniquement les html_id (places réservées)
            foreach ($seatsBooked as $value) {
                $seat[] = $value->gethtml_id();
            }

            // Return d'une réponse Ajax
            return new JsonResponse(array('html_id' => $seat));
        }
    }

    //Affiche le nombre d'articles dans le panier
    public function menuAction(Request $request)
    {
        $session = $request->getSession();

        if (!$session->has('panier')) {
            $articles = 0;
        } else {
            $articles = count($session->get('panier'));
        }

        return $this->render('topnav.html.twig', ['articles' => $articles]);
    }

    //Créé un formulaire personnalisé
    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('id' => $id)))
            ->setMethod($method)
            ->getForm();
    }

    //Génère en SESSION le contenu du panier
    private function generatePanier($request, $reservation)
    {
        //On récupère la variable SESSION
        $session = $request->getSession();

        //On définit la SESSION 'panier'
        if (!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');
        //Compte le nombre de résa déjà en SESSION
        $numberResa = count($panier);
        //Ajoute les nouvelles réservations à la SESSION 'panier'
        if ($numberResa != null) {
            foreach ($reservation['data'] as $resa) {
                array_push($panier, $resa);
            }
        } else {
            //On associe $panier avec les réservation
            $panier = $reservation['data'];
        }
        //On set la session 'panier' avec les infos dans $panier
        $session->set('panier', $panier);

    }

    //Construit un tableau avec tous les idEvent de la réservation(panier)
    private function getIdEventPanier($panier)
    {
        $idEvent = [];
        //Pour chaque réservation on récupère son idEvent
        foreach ($panier as $event) {
            $idEvent[$event['idEvent']] = $event['idEvent'];
        }

        //Retourne un tableau avec seulement les idEvent
        return $idEvent;
    }
}
