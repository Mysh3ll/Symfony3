<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Typeevent;
use AppBundle\Form\TypeeventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TypeEventController extends Controller
{
    /**
     * @Route("/admin/category/list", name="admin_category_list")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $typeEvents = $this->getDoctrine()
            ->getRepository(Typeevent::class)
//            ->findAll();
            ->findBy(array(), array('libelleType' => 'asc')); // Order by ASC

        return $this->render('@App/backOffice/listTypeEvent.html.twig', ['typeEvents' => $typeEvents]);
    }

    /**
     * @Route("/admin/category/create", name="admin_category_create")
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        // On crée un type d'event
        $typeEvent = new Typeevent();

        // On récupère le formulaire
        $form = $this->createForm(TypeeventType::class, $typeEvent);


        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre la catégorie en BDD
            $em = $this->getDoctrine()->getManager();

            $em->persist($typeEvent);
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Catégorie ajoutée avec succès.');

            return $this->redirectToRoute('admin_category_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/createTypeEvent.html.twig', ['form' => $formview]);

    }

    /**
     * @Route("/admin/category/edit/{id}", name="admin_category_edit", requirements={"id" = "\d+"})
     * @param $typeEvent
     * @return Response
     */
    public function editAction(Request $request, Typeevent $typeEvent)
    {

        // On récupère le formulaire
        $form = $this->createForm(TypeeventType::class, $typeEvent);

        // Requête envoyée par le formulaire
        $form->handleRequest($request);

        // Si le formulaire a été soumi et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre la catégorie en BDD
            $em = $this->getDoctrine()->getManager();

//          $em->persist($typeEvent); // inutile car l'objet provient déjà de la bdd
            $em->flush();

            // Flash message
            $this->addFlash('success', 'Catégorie modifiée avec succès.');

            return $this->redirectToRoute('admin_category_list');
        }

        // On génère le html du formulaire crée
        $formview = $form->createView();

        // On rend la vue
        return $this->render('@App/backOffice/editTypeEvent.html.twig', ['form' => $formview]);
    }

    /**
     * @Route("/admin/category/delete/{id}", name="admin_category_delete", requirements={"id" = "\d+"})
     * @param Request $request
     * @param Typeevent $typeEvent
     * @return Response
     * @Method({"POST","DELETE"})
     */
    public function deleteAction(Request $request, Typeevent $typeEvent)
    {

        // On enregistre la catégorie en BDD
        $em = $this->getDoctrine()->getManager();

        // Si c'est une requête Ajax (vue admin_typeEvent_list)
        if ($request->isXmlHttpRequest()) {
            // On supprime l'événement dans la bdd
            $em->remove($typeEvent);
            $em->flush();

            // Return d'une réponse Ajax
            return new JsonResponse(array('delete' => 'success', 'message' => 'Catégorie supprimée avec succès.'));
        }

//        // On supprime la catégorie dans la bdd
//        $em->remove($typeEvent);
//        $em->flush();
//
//        // Flash message
//        $this->addFlash('success', 'Catégorie supprimée avec succès.');
//
//        return $this->redirectToRoute('admin_category_list');
    }
}
