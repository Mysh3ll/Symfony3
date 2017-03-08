<?php

namespace RestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;

class UserController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Post("/login")
     * @param Request $request
     * @return object
     */
    public function postLoginAction(Request $request)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(['username' => $request->get('username')]);
        if (!$user) {
            return ['message' => 'Utilisateur non trouvé.',
                    'success' => 0];
        }
        $isValid = $this->get('security.password_encoder')
            ->isPasswordValid($user, $request->get('password'));
        if (!$isValid) {
            return ['message' => 'Mauvais mot de passe !',
                    'success' => 0];
        }
        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode([
                'username' => $user->getUsername(),
                'exp'      => time() + 3600 // 1 hour expiration
            ]);

        $role = $user->getRoles();

        return ['token'   => $token,
                'success' => 1,
                'message' => 'Connecté.',
                'role'    => $role];
    }

    /**
     * @Rest\View()
     * @Rest\Get("/users/{id}")
     * @param Request $request
     * @return User|object|JsonResponse
     */
    public function getUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($request->get('id'));
        /* @var $user User */

        if (!$user) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        return $user;
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
