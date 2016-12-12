<?php

namespace AppBundle\Controller\frontOffice\user;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @property ContainerInterface container
 */
class PdfController extends Controller
{
    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Get a service from the container
     *
     * @param string The service to get
     * @return object
     */
    protected function get($service)
    {
        return $this->container->get($service);
    }


    /**
     * @Route("/pdf", name="front_order_pdf")
     * @param $titre
     * @param $date
     * @param $seat
     * @param $row
     * @param $price
     * @param $image
     * @param $user
     * @return Response
     */
    public function generatePdfTicketAction($titre, $date, $seat, $row, $price, $image, $user)
    {
//        $snappy = $this->get('knp_snappy.pdf');
//
//        $html = $this->renderView('@App/frontOffice/pdf/pdfOrder.html.twig', array(
//            'event' => 'TITRE',
//            'date'  => '2016-02-12',
//            'seat'  => '112',
//            'row'   => '1',
//            'price' => '100',
//        ));
//
//        $filename = 'ticket';
//
//        return new Response(
//            $snappy->getOutputFromHtml($html, array('lowquality'  => false,
//                                                    'encoding'    => 'utf-8',
//                                                    'images'      => true,
//                                                    'orientation' => 'landscape'
//            )),
//            200,
//            array(
//                'Content-Type'        => 'application/pdf',
////                'Content-Disposition'   => 'attachment; filename="'.$filename.'.pdf"'
//                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
//            )
//        );

        $pdfFolder = $_SERVER['DOCUMENT_ROOT'] . '/TPResa_Symfony3-Git/web/pdf/' . $user . '/';

        return new Response(
            $this->get('knp_snappy.pdf')->generateFromHtml(
                $this->renderView(
                    '@App/frontOffice/pdf/pdfOrder.html.twig', array(
                        'event' => $titre,
                        'date'  => $date,
                        'seat'  => $seat,
                        'row'   => $row,
                        'price' => $price,
                        'image' => $image,
                    )
                ),
                $pdfFolder . time() . '.pdf',
                array('lowquality'  => false,
                      'encoding'    => 'utf-8',
                      'images'      => true,
                      'orientation' => 'landscape'
                )
            ));
    }
}
