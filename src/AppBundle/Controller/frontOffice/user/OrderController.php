<?php

namespace AppBundle\Controller\frontOffice\user;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrderController extends Controller
{
    /**
     * @Route("/resa/order", name="front_order_list")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        //Get the user connected
        $user = $this->getUser();

        //Get Doctrine
        $em = $this->getDoctrine()->getManager();
//        $orders = $em->getRepository('AppBundle:Participer')->findOrderById(5);
        $orders = $em->getRepository('AppBundle:Participer')->findOrderByUser($user);
        return $this->render('@App/frontOffice/listOrder.html.twig', array('user' => $user, 'orders' => $orders));
    }
}
