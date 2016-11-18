<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Salle;
use AppBundle\Form\SalleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RoomEventController extends Controller
{
    /**
     * @Route("/admin/room/list", name="admin_room_list")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $roomEvents = $this->getDoctrine()
            ->getRepository(Salle::class)
//            ->findAll();
            ->findBy(array(), array('nomSalle' => 'asc')); // Order by ASC

        return $this->render('@App/backOffice/listRoomEvent.html.twig', ['roomEvents' => $roomEvents]);
    }

    /**
     * @Route("/admin/room/create", name="admin_room_create")
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        // On crée une salle d'event
        $roomEvent = new Salle();

        // On récupère le formulaire
        $form = $this->createForm(SalleType::class, $roomEvent);


        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre la salle en BDD
            $em = $this->getDoctrine()->getManager();

            $em->persist($roomEvent);
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Salle ajoutée avec succès.');

            return $this->redirectToRoute('admin_room_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/createRoomEvent.html.twig', ['form' => $formview]);

    }

    /**
     * @Route("/admin/room/edit/{id}", name="admin_room_edit", requirements={"id" = "\d+"})
     * @param $roomEvent
     * @return Response
     */
    public function editAction(Request $request, Salle $roomEvent)
    {

        // On récupère le formulaire
        $form = $this->createForm(SalleType::class, $roomEvent);

        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre la salle en BDD
            $em = $this->getDoctrine()->getManager();

//          $em->persist($roomEvent); // inutile car l'objet provient déjà de la bdd
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Salle modifiée avec succès.');

            return $this->redirectToRoute('admin_room_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/editRoomEvent.html.twig', ['form' => $formview]);
    }

    /**
     * @Route("/admin/room/delete/{id}", name="admin_room_delete", requirements={"id" = "\d+"})
     * @param $roomEvent
     * @return Response
     */
    public function deleteAction(Request $request, Salle $roomEvent)
    {

        // On enregistre la salle en BDD
        $em = $this->getDoctrine()->getManager();

        // On supprime la salle dans la bdd
        $em->remove($roomEvent);
        $em->flush();

        // Flash message
        $this->addFlash('success', 'Salle supprimée avec succès.');

        return $this->redirectToRoute('admin_room_list');
    }
}
