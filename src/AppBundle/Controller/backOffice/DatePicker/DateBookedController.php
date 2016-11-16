<?php

namespace AppBundle\Controller\backOffice\DatePicker;

use AppBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DateBookedController extends Controller
{
    /**
     * @Route("/admin/event/date_booked", name="admin_event_date_booked")
     * @return Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT e FROM AppBundle:Event e'
        );
        $events = $query->getArrayResult();

        $response = new Response(json_encode($events));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
