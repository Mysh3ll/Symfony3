<?php

namespace AppBundle\Controller\frontOffice\user;

use AppBundle\Entity\Participer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Event;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;

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
    public function editOrder(Event $idEvent)
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
    public function validateEditOrder(Request $request, Event $Event)
    {
        //Récupération de l'utilisateur
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        // Création du formulaire personnalisé
        $form = $this->createCustomForm($Event->getIdEvent(), 'POST', 'front_order_edit_validate');
        // Récupère la request du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Array for the edited order
            $order = $this->generateEditedOrder($request);

            //Delete the previous order
            $this->deletePreviousOrder($Event->getIdEvent(), $user->getId());

            //Insert the new edited order
            $this->insertOrder($order, $user);

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
        //Get Doctrine
        $em = $this->getDoctrine()->getManager();
        //Insert chaque réservation dans la BDD
            foreach ($order as $event) {
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
    }
}
