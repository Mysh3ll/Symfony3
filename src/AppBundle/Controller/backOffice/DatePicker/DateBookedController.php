<?php

namespace AppBundle\Controller\backOffice\DatePicker;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DateBookedController extends Controller
{
    /**
     * @Route("/admin/event/date_booked", name="admin_event_date_booked")
     * @Method({"POST"})
     * @return Response
     */
    public function getCurrentYearAction()
    {

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Event');

        // createQueryBuilder() automatically selects FROM AppBundle:Event
        // and aliases it to "e"
        $query = $repository->createQueryBuilder('e')
            ->leftJoin('e.idType', 't')
            ->leftJoin('e.idSalle', 's')
            ->addSelect('t')
            ->addSelect('s')
            ->where('e.dateEvent LIKE :year')
            ->setParameter('year', '%' . '2016' . '%')
            ->orderBy('e.dateEvent', 'ASC')
            ->getQuery();

        $events = $query->getArrayResult();

        return new JsonResponse($events);

    }

    /**
     * @Route("/admin/event/date_booked/{year}", name="admin_event_date_booked_year", requirements={"year" = "\d+"})
     * @Method({"POST"})
     * @param $year
     * @return Response
     */
    public function getNewYearAction($year)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Event');

        // createQueryBuilder() automatically selects FROM AppBundle:Event
        // and aliases it to "e"
        $query = $repository->createQueryBuilder('e')
            ->leftJoin('e.idType', 't')
            ->leftJoin('e.idSalle', 's')
            ->addSelect('t')
            ->addSelect('s')
            ->where('e.dateEvent LIKE :year')
            ->setParameter('year', '%' . $year . '%')
            ->orderBy('e.dateEvent', 'ASC')
            ->getQuery();

        $events = $query->getArrayResult();

        return new JsonResponse($events);
    }
}
