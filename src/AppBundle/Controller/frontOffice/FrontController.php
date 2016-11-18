<?php

namespace AppBundle\Controller\frontOffice;

use AppBundle\Form\DatePicker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/resa", name="resa_homepage")
     */
//    public function indexAction(Request $request)
//    {
//        // replace this example code with whatever you need
//        return $this->render('@App/frontOffice/index.html.twig', []);
//    }

    public function indexAction(Request $request)
    {


        $form = $this->createForm(DatePicker::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ... persist the $user variable or any other work
            // On récupère l'EntityManager
            $em = $this->getDoctrine()->getManager();

            // Étape 1 : On « persiste » l'entité
            $em->persist($user);

            // Étape 2 : On « flush » tout ce qui a été persisté avant
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }

        return $this->render('@App/frontOffice/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
