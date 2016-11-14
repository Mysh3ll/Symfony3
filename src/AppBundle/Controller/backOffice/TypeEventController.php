<?php

namespace AppBundle\Controller\backOffice;

use AppBundle\Entity\Typeevent;
use AppBundle\Form\TypeeventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
            ->findAll();
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
}
