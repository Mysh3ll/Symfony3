<?php

namespace RestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;

class TicketController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/ticket/{codeUnique}")
     * @param Request $request
     * @return array
     */
    public function getTicketAction(Request $request)
    {
        $token = $this->getCredentials($request);
        $user = $this->checkUser($token);

        if ($user->hasRole('ROLE_GUICHER')) {

            //Get Doctrine Manager
            $em = $this->getDoctrine()->getManager();
            //Find the ticket by the codeUnique
            $ticket = $em->getRepository('AppBundle:Participer')->findOneBy(array('codeUnique' => $request->get('codeUnique')));

            //Le ticket n'existe pas !!!
            if ($ticket === null) {

                return ['success' => 0,
                        'message' => "Le ticket n'existe pas !"];
            }

            //Check if the ticket is enabled or not
            if ($ticket->getEnabled() === false) {
                //Activation du ticket
                $ticket->setEnabled(true);
                $em->persist($ticket);
                $em->flush();

                return ['success' => 1,
                        'message' => "La personne peut assister à l'événement."];
            } else {

                return ['success' => 0,
                        'message' => "La personne ne peut pas assister à l'événement."];
            }

        } else {
            return ['success' => 0,
                    'message' => "Vous n'êtes pas autorisé à valider les tickets !"];
        }
    }

    protected function getCredentials(Request $request)
    {

        if (!$request->headers->has('Authorization')) {
            return;
        }

        $extractor = new AuthorizationHeaderTokenExtractor(
            'Bearer',
            'Authorization'
        );

        $token = $extractor->extract($request);

        if (!$token) {
            return;
        }

        return $token;
    }

    protected function checkUser($credentials)
    {
        $data = $this->get('lexik_jwt_authentication.encoder')
            ->decode($credentials);
        $username = $data['username'];

        $user = $this->getDoctrine()->getRepository('AppBundle:User')
            ->findOneBy(['username' => $username]);

        if (!$user) {
            return;
        }

        return $user;
    }
}
