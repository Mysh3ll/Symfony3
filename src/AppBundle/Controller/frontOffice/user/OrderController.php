<?php

namespace AppBundle\Controller\frontOffice\user;

use AppBundle\Entity\Participer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Event;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Swift_Attachment;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OrderController extends Controller
{
    /**
     * @Route("/resa/order", name="front_order_list")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        //Récupération de l'utilisateur
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        // Get Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get all orders for the user
        $orders = $em->getRepository('AppBundle:Participer')->findOrderByUser($user);

        return $this->render('@App/frontOffice/listOrder.html.twig', array('user' => $user, 'orders' => $orders));
    }

    /**
     * @Route("/resa/order/{idEvent}", name="front_order_view", requirements={"idEvent" = "\d+"})
     * @param $idEvent
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function orderAction($idEvent)
    {
        // Get Order détails
        $order = $this->getOrderDetails($idEvent);

        return $this->render('@App/frontOffice/viewOrder.html.twig', ['order' => $order]);
    }

    /**
     * @Route("/resa/order/edit/{idEvent}", name="front_order_edit", requirements={"idEvent" = "\d+"})
     * @param $idEvent
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editOrderAction(Event $idEvent)
    {
        // Get Order détails
        $order = $this->getOrderDetails($idEvent);

        // Get Event Object
        $Event = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event')->find($idEvent);

        $addForm = $this->createCustomForm($Event->getIdEvent(), 'POST', 'front_order_edit_validate');

        return $this->render('@App/frontOffice/editOrder.html.twig', ['order' => $order, 'Event' => $Event, 'add_form' => $addForm->createView()]);
    }

    /**
     * @Route("/resa/order/edit/{idEvent}/validate", name="front_order_edit_validate", requirements={"idEvent" = "\d+"})
     * @param Request $request
     * @param Event $Event
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function validateEditOrderAction(Request $request, Event $Event)
    {
        //Récupération de l'utilisateur
        $user = $this->getUser();

        // Création du formulaire personnalisé
        $form = $this->createCustomForm($Event->getIdEvent(), 'POST', 'front_order_edit_validate');
        // Récupère la request du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Array for the edited order
            $order = $this->generateEditedOrder($request);

            //Delete the previous order
            $this->deletePreviousOrder($Event->getIdEvent(), $user->getId());

            //Efface le contenu du dossier du user contenant les tickets au format pdf
            $iterator = $this->getAllPdfFiles($user);
            foreach ($iterator as $file) {
                unlink($file->getRealPath());
            }

            //Insert the new edited order
            $this->insertOrder($order, $user);

            //Variable contenant tout les idEvent de la réservation
            $idEventPanier = $this->getIdEventPanier($order);

            $Events = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event')->findArray(array_keys($idEventPanier)); //Query qui récupère les Events en fonction de l'idEvent pour l'affichage dans la vue panier

            //Envoie du mail de confirmation
            $this->sendConfirmationMail($user, $Events, $order);

            // Flash message
            $this->addFlash('success', 'Réservation modifiée avec succès.');

            return $this->redirectToRoute('front_order_list');

        }

        return $this->render('@App/frontOffice/index.html.twig');
    }

    /**
     * @param $idEvent
     * @return Participer[]|array
     */
    private function getOrderDetails($idEvent)
    {
        //Récupération de l'utilisateur
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        // Get Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get all data for the event for the user ordered by n° seat
        $order = $em->getRepository('AppBundle:Participer')->findBy(
            array(
                "idPersonne" => $user,
                "idEvent"    => $idEvent
            ),
            array(
                "numPlace" => "ASC"
            ));

        return $order;
    }

    //Créé un formulaire personnalisé
    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('idEvent' => $id)))
            ->setMethod($method)
            ->getForm();
    }

    //Generate the new edited order before flush into bdd
    private function generateEditedOrder(Request $request)
    {
        //Tableau avec les détails de la réservation
        $reservation = array();
        //On récupère le contenu de la modification de la réservation
        $content = $request->get('order');
        if (!empty($content)) {
            //Décode le contenu au format JSON pour le transformer en tableau
            $reservation = json_decode($content, true); // 2nd param to get as array
        }
        //Array for the edited order
        $order = [];
        foreach ($reservation['data'] as $resa) {
            array_push($order, $resa);
        }

        return $order;
    }

    //Delete the previous order before insert and flush
    private function deletePreviousOrder($idEvent, $idPersonne)
    {
        //Get Doctrine
        $em = $this->getDoctrine()->getManager();

        //Delete all seat for the event
        $em->getRepository('AppBundle:Participer')->deleteEventByUser($idEvent, $idPersonne);
    }

    //Insert the new edited order
    private function insertOrder($order, $user)
    {
        //Get the tokenGenerator de FOSUser to generate the codeUnique for the ticket
        $tokenGenerator = $this->get('fos_user.util.token_generator');
        //Get Doctrine
        $em = $this->getDoctrine()->getManager();
        //Insert chaque réservation dans la BDD
        foreach ($order as $event) {
            //Création du codeUnique
            $codeUnique = substr($tokenGenerator->generateToken(), 0, 24);

            //Création de l'objet Participer pour l'insertion en BDD
            $participer = new Participer();
            $participer->setIdPersonne($user);
            $Event = $em->getRepository('AppBundle:Event')->find($event["idEvent"]);
            $participer->setIdEvent($Event);
            $participer->setNumPlace($event["seat"]);
            $participer->setHtml_id($event["html_id"]);
            $participer->setPrice($event["price"]);
            $participer->setCodeUnique($codeUnique);
            $participer->setEnabled(false);
            $em->persist($participer);
            $em->flush($participer);

            //Génération des fichiers pdf contenant les tickets commandés
            $this->get('snappy.pdf.ticket')->generatePdfTicketAction($Event->getTitreEvent(), $Event->getDateEvent(), $event["seat"], $event["html_id"], $event["price"], $Event->getPathImage(), $codeUnique, $user->getUsername());
        }
    }

    //Retourne tous les fichiers pdf dans le répertoire pdf du user connecté
    private function getAllPdfFiles($user)
    {
        $fs = new Filesystem();
        $pdfPath = '/var/www/html/TPResa_Symfony3-Git/web/pdf/' . $user->getUsername() . '/';

        //Si le répertoire du user n'existe pas on le crée
        if (!$fs->exists($pdfPath)) {
            // create the directory
            $fs->mkdir($pdfPath, 0755);
            // change the owner of the video directory recursively
            $fs->chown($pdfPath, 'www-data', true);
        }

        //Recherche de tout les tickets au format pdf du user en cours
        $finder = new Finder();
        $iterator = $finder
            ->files()
            ->name('*.pdf')
            ->depth(0)
            ->in($pdfPath);

        return $iterator;
    }

    //Construit un tableau avec tous les idEvent de la réservation(panier)
    private function getIdEventPanier($oder)
    {
        $idEvent = [];
        //Pour chaque réservation on récupère son idEvent
        foreach ($oder as $event) {
            $idEvent[$event['idEvent']] = $event['idEvent'];
        }

        //Retourne un tableau avec seulement les idEvent
        return $idEvent;
    }

    private function sendConfirmationMail($user, $Events, $panier)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Confirmation de modification')
            ->setFrom('noreply@ticketnet.fr')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@App/frontOffice/email/confirmOrder.html.twig',
                    array('Events' => $Events, 'panier' => $panier, 'name' => $user->getUsername())
                ),
                'text/html'
            );

        //Recherche de tout les tickets au format pdf du user en cours
        $iterator = $this->getAllPdfFiles($user);

        //Création de la pièce jointe pour tout les ticket trouvés
        foreach ($iterator as $file) {
            //Création des pièces jointes pour l'envoie du mail
            $message->attach(Swift_Attachment::fromPath($file->getRealPath()));
        }

        //Envoie du mail
        $this->get('mailer')->send($message);

    }
}
