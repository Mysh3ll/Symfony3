<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Event;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $idType = $em->getRepository('AppBundle:Event')
            ->findByIdType();

        $Events = [];

        foreach ($idType as $key => $value) {
            $Events[] = $em->getRepository('AppBundle:Event')->findByIdTypeOderByDate($value["idType"]);

        }

        return $this->render('default/index.html.twig', ['Events' => $Events]);
    }

}
