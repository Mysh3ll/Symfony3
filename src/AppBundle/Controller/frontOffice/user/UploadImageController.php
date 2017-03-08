<?php

namespace AppBundle\Controller\frontOffice\user;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UploadFileUserType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class UploadImageController extends Controller
{
    /**
     * @Route("/profile/upload", name="user_upload_image")
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->createForm(UploadFileUserType::class, $user);
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

        return $this->render('FOSUserBundle:Profile:upload_image.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
