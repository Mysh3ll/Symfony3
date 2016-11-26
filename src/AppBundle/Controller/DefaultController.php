<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Event;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="front_homepage")
     * @return Response
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

        return $this->render('@App/frontOffice/index.html.twig', ['Events' => $Events]);
    }

    /**
     * @Route("/view/{id}", name="front_view_event", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function viewAction(Event $Event)
    {
        // On rend la vue
        return $this->render('@App/frontOffice/viewEvent.html.twig', ['Event' => $Event]);
    }

    /**
     * @Route("/seat", name="front_seat_event")
     * @return Response
     */
    public function seatAction()
    {
        // On rend la vue
        return $this->render('@App/frontOffice/seatEvent.html.twig', []);
    }

}
