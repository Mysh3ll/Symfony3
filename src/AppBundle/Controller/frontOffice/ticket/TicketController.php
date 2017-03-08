<?php

namespace AppBundle\Controller\frontOffice\ticket;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TicketController extends Controller
{
    /**
     * @Route("/ticket/validate/{codeUnique}", name="front_ticket_validate")
     * @param $codeUnique
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function validateAction($codeUnique)
    {
        // The second parameter is used to specify on what object the role is tested.
        $this->denyAccessUnlessGranted('ROLE_GUICHER', null, 'Unable to access this page!');

        //Get Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        //Find the ticket by the codeUnique
        $ticket = $em->getRepository('AppBundle:Participer')->findOneBy(array('codeUnique' => $codeUnique));

        //Le ticket n'existe pas !!!
        if ($ticket === null) {
            // Flash message
            $this->addFlash('validate_ticket', 'Le ticket n\'existe pas !');

            return $this->render('@App/frontOffice/ticket/ticket.html.twig', array('validation' => 'unknown'));
        }

        //Check if the ticket is enabled or not
        if ($ticket->getEnabled() === false) {
            // Flash message
            $this->addFlash('validate_ticket', 'La personne peut assister à l\'événement.');
            //Activation du ticket
            $ticket->setEnabled(true);
            $em->persist($ticket);
            $em->flush();

            return $this->render('@App/frontOffice/ticket/ticket.html.twig', array('validation' => 'success'));
        } else {
            // Flash message
            $this->addFlash('validate_ticket', 'La personne ne peut pas assister à l\'événement.');

            return $this->render('@App/frontOffice/ticket/ticket.html.twig', array('validation' => 'fail'));
        }
    }
}
