<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class DeleteEventController extends Controller
{
    /**
     * @Route("/admin/event/delete/list", name="admin_event_delete_list")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        // Requête avec createQueryBuilder
        $em = $this->getDoctrine();
        $events = $em->getRepository(Event::class)
            ->findAllBookedEvent();

        $query = $em->getRepository(Event::class)
            ->findAllBookedEventForPagination($events);

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('@App/backOffice/listDeleteEvent.html.twig', ['Events' => $result]);
    }

    /**
     * @Route("/admin/event/delete/view/{id}", name="admin_event_delete_view", requirements={"id" = "\d+"})
     * @param Request $request
     * @param Event $Event
     * @return Response
     */
    public function viewAction(Request $request, Event $Event)
    {
        $deleteForm = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete_booked');

        // On rend la vue
        return $this->render('@App/backOffice/viewDeleteEvent.html.twig', ['Event' => $Event, 'delete_form' => $deleteForm->createView()]);
    }

    /**
     * @Route("/admin/event/delete/booked/{id}", name="admin_event_delete_booked", requirements={"id" = "\d+"})
     * @param Request $request
     * @param Event $Event
     * @return Response
     * @Method({"POST","DELETE"})
     */
    public function deleteAction(Request $request, Event $Event)
    {

        // On enregistre l'événement en BDD
        $em = $this->getDoctrine()->getManager();

        // On récupère tout les événements de l'Entity Event
        $allEvents = $em->getRepository('AppBundle:Event')->findAllBookedEvent();
        // Compte le nombre d'événements
        $countEvents = count($allEvents);
        // Création du formulaire personnalisé
        $form = $this->createCustomForm($Event->getIdEvent(), 'DELETE', 'admin_event_delete_booked');
        // Récupère la request du formulaire
        $form->handleRequest($request);

        //Savoir de quelle origine est la requête du formulaire post ou ajax
        if ($form->isSubmitted() && $form->isValid()) {
            $requete = "post";
        } elseif ($request->isXmlHttpRequest()) {
            $requete = "ajax";
        }

        if ($requete !== null) {
            // On récupère tous les participants
            $users = $em->getRepository('AppBundle:Participer')->findMailUserByIdEvent($Event);
            // On envoie un mail à tous les participants
            foreach ($users as $user) {
                $this->sendDeleteMail($user["email"], $user["username"], $Event->getTitreEvent());
            }
            // On supprime l'événement dans la bdd
            $em->getRepository('AppBundle:Participer')->deleteEvent($Event);
            $em->remove($Event);
            $em->flush();

            if ($requete = "post") {
                // Flash message
                $this->addFlash('success', 'Événement supprimé avec succès.');

                return $this->redirectToRoute('admin_event_delete_list');
            } elseif ($requete = "ajax") {
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

    private function sendDeleteMail($userMail, $userName, $Event)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Suppression de votre réservation')
            ->setFrom('noreply@ticketnet.fr')
            ->setTo($userMail)
            ->setBody(
                $this->renderView(
                    '@App/backOffice/email/deleteEvent.html.twig',
                    array('Event' => $Event, 'name' => $userName)
                ),
                'text/html'
            );

        //Envoie du mail
        $this->get('mailer')->send($message);

    }

}
