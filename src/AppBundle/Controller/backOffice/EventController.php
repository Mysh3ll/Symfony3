<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Event;
use AppBundle\Entity\Participer;
use AppBundle\Form\EventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class EventController extends Controller
{
    /**
     * @Route("/admin/event/list", name="admin_event_list")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        // Requête avec createQueryBuilder
        $em = $this->getDoctrine();
        $query = $em->getRepository(Event::class)
            ->findAllOrderByDate();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('@App/backOffice/listEvent.html.twig', ['Events' => $result]);
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
     * @Method({"GET","POST","PUT"})
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
        $deleteForm = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete');

        // On rend la vue
        return $this->render('@App/backOffice/viewEvent.html.twig', ['Event' => $Event, 'delete_form' => $deleteForm->createView()]);
    }

    /**
     * @Route("/admin/event/delete/{id}", name="admin_event_delete", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     * @Method({"POST","DELETE"})
     */
    public function deleteAction(Request $request, Event $Event)
    {
        // On enregistre l'événement en BDD
        $em = $this->getDoctrine()->getManager();

        // On récupère tout les événements de l'Entity Event
        $allEvents = $em->getRepository('AppBundle:Event')->findAll();
        // Compte le nombre d'événements
        $countEvents = count($allEvents);
        // Création du formulaire personnalisé
        $form = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete');
        // Récupère la request du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère tous les participants (s'il y en a)
            $events = $em->getRepository(Participer::class)
                ->findAllBookedEventById($Event);
            if (count($events) > 0) {
                // Flash message
                $this->addFlash('fail', "Impossible de supprimer cet événement, car il y a des réservations.<br/> Veuillez utiliser le menu <strong>\"Annulation des inscriptions\"</strong>.");
            } else {
                // On supprime l'événement dans la bdd
                $em->remove($Event);
                $em->flush();
                // Flash message
                $this->addFlash('success', 'Événement supprimé avec succès.');
            }

            return $this->redirectToRoute('admin_event_list');
        }

        // Si c'est une requête Ajax (vue admin_event_list)
        if ($request->isXmlHttpRequest()) {
            // On récupère tous les participants (s'il y en a)
            $events = $em->getRepository(Participer::class)
                ->findAllBookedEventById($Event);
            if (count($events) > 0) {
                // Return d'une réponse Ajax
                return new JsonResponse(array('delete' => 'fail', 'countEvents' => $countEvents));
            } else {
                // On supprime l'événement dans la bdd
                $em->remove($Event);
                $em->flush();

                // Return d'une réponse Ajax
                return new JsonResponse(array('delete' => 'success', 'countEvents' => $countEvents, 'message' => 'Événement supprimé avec succès.'));
            }

        }
    }

    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('id' => $id)))
            ->setMethod($method)
            ->getForm();
    }
}
