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
     * @param $codeUnique
     * @param $user
     * @return Response
     */
    public function generatePdfTicketAction($titre, $date, $seat, $row, $price, $image, $codeUnique, $user)
    {

        $pdfFolder = '/var/www/html/TPResa_Symfony3-Git/web/pdf/' . $user . '/';

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
                        'codeUnique' => $codeUnique,
                    )
                ),
                $pdfFolder . 'MyTiKet ' . $row . '.pdf',
                array('lowquality'  => false,
                      'encoding'    => 'utf-8',
                      'images'      => true,
                      'orientation' => 'landscape'
                )
            ));
    }
}
