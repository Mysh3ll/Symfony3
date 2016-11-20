<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Event;
use AppBundle\Form\EventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    /**
     * @Route("/admin/event/list", name="admin_event_list")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
//        $Events = $this->getDoctrine()
//            ->getRepository(Event::class)
////            ->findAll();
//            ->findBy(array(), array('dateEvent' => 'asc')); // Order by ASC
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT e
                FROM AppBundle:Event e
                JOIN AppBundle:Typeevent t
                  WITH t.idType = e.idType
                JOIN AppBundle:Salle s
                  WITH s.idSalle = e.idSalle
                ORDER BY e.dateEvent";
        $query = $em->createQuery($dql);

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        $deleteFormAjax = $this->createCustomForm(':EVENT_ID', 'DELETE', 'admin_event_delete');

        return $this->render('@App/backOffice/listEvent.html.twig', ['Events' => $result, 'delete_form_ajax' => $deleteFormAjax->createView()]);
    }

    /**
     * @Route("/admin/event/create", name="admin_event_create")
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        // On crée un type d'event
        $Event = new Event();

        // On récupère le formulaire
        $form = $this->createForm(EventType::class, $Event);

        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre l'événement en BDD
            $em = $this->getDoctrine()->getManager();

            $em->persist($Event);
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Événement ajouté avec succès.');

            return $this->redirectToRoute('admin_event_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/createEvent.html.twig', ['form' => $formview]);

    }

    /**
     * @Route("/admin/event/edit/{id}", name="admin_event_edit", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function editAction(Request $request, Event $Event)
    {

        // On récupère le formulaire
        $form = $this->createForm(EventType::class, $Event);

        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre l'événement en BDD
            $em = $this->getDoctrine()->getManager();

//          $em->persist($Event); // inutile car l'objet provient déjà de la bdd
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Événement modifié avec succès.');

            return $this->redirectToRoute('admin_event_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/editEvent.html.twig', ['form' => $formview]);
    }

    /**
     * @Route("/admin/event/view/{id}", name="admin_event_view", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function viewAction(Request $request, Event $Event)
    {
//        return new Response('id: ' . $Event->getIdEvent() . ' titre: ' . $Event->getTitreEvent());
//        $deleteForm = $this->createDeleteForm($Event);
        $deleteForm = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete');
        // On rend la vue
        return $this->render('@App/backOffice/viewEvent.html.twig', ['Event' => $Event, 'delete_form' => $deleteForm->createView()]);
    }

    /**
     * @Route("/admin/event/delete/{id}", name="admin_event_delete")
     * @param $Event
     * @return Response
     */
    public function deleteAction(Request $request, Event $Event)
    {

//        // On enregistre l'événement en BDD
//        $em = $this->getDoctrine()->getManager();
//
//        // On supprime l'événement dans la bdd
//        $em->remove($Event);
//        $em->flush();
//
//        // Flash message
//        $this->addFlash('success', 'Événement supprimé avec succès.');
//
//        return $this->redirectToRoute('admin_event_list');

        // On enregistre l'événement en BDD
        $em = $this->getDoctrine()->getManager();

//        $form = $this->createDeleteForm($Event);
        // On récupère tout les événements de l'Entity Event
        $allEvents = $em->getRepository('AppBundle:Event')->findAll();
        // Compte le nombre d'événements
        $countEvents = count($allEvents);
        $form = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si c'est une requête Ajax (vue admin_event_list)
            if ($request->isXmlHttpRequest()) {
                // On supprime l'événement dans la bdd
                $em->remove($Event);
                $em->flush();
                // Return d'une réponse Ajax
                return new Response(
                    json_encode(array('delete' => 'success', 'countEvents' => $countEvents, 'message' => 'Événement supprimé avec succès.')),
                    200,
                    array('Content-Type' => 'application/json')
                );
            }
            // On supprime l'événement dans la bdd
            $em->remove($Event);
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Événement supprimé avec succès.');

            return $this->redirectToRoute('admin_event_list');
        }
    }

    private function createDeleteForm(Event $Event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_event_delete', array('id' => $Event->getIdEvent())))
            ->setMethod('DELETE')
            ->getForm();
    }

    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('id' => $id)))
            ->setMethod($method)
            ->getForm();
    }
}
