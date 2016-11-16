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
        $Events = $this->getDoctrine()
            ->getRepository(Event::class)
//            ->findAll();
            ->findBy(array(), array('dateEvent' => 'asc')); // Order by ASC

        return $this->render('@App/backOffice/listEvent.html.twig', ['Events' => $Events]);
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
     * @Route("/admin/event/delete/{id}", name="admin_event_delete", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function deleteAction(Request $request, Event $Event)
    {

        // On enregistre la catégorie en BDD
        $em = $this->getDoctrine()->getManager();

        // On supprime l'événement dans la bdd
        $em->remove($Event);
        $em->flush();

        // Flash message
        $this->addFlash('success', 'Événement supprimé avec succès.');

        return $this->redirectToRoute('admin_event_list');
    }
}
