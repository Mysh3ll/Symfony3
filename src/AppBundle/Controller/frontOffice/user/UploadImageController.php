<?php

namespace AppBundle\Controller\frontOffice\user;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
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

        // Get the actual pathImage of user
        //$old_file = $user->getPathImage();

        $form = $this->createForm(UploadFileUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded Image file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            //$file = $user->getPathImage();

            // Generate a unique name for the file before saving it
//            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
//            $fileName = $this->get('app.image_uploader')->upload($file); // appel du service 'app.image_uploader'

            // Delete the older Image stored for the user avatar
          /*  if ($old_file != null) {
                $webPath = $this->getParameter('kernel.root_dir') . '/../web/uploads/user/images/' . $old_file;
                if (file_exists($webPath)) {
                    unlink($webPath);
                }
            }*/

            // Update the 'path' property to store the image file name
            // instead of its contents
//            $user->setPathImage($fileName);

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
