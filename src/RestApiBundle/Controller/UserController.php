<?php

namespace RestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/users")
     * @param Request $request
     * @return User[]|array
     */
    public function getUsersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        /* @var $users User[] */

        return $users;
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

    /**
     * @Rest\View()
     * @Rest\Post("/users/login")
     * @param Request $request
     * @return object
     */
    public function postUserAction(Request $request)
    {
        $userName = $request->get('username');
        $password = $request->get('password');

        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(['username' => $userName]);

        if (!$user) {
            return new JsonResponse(['message' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }

        $isValid = $this->get('security.password_encoder')
            ->isPasswordValid($user, $password);

        if (!$isValid) {
            return new JsonResponse(['message' => 'Wrong password !'], Response::HTTP_NOT_FOUND);
        }

        $token = $this->getToken($user);
        $response = new Response($this->serialize(['token' => $token]), Response::HTTP_OK);

        return $response;
    }

    /**
     * Returns token for user.
     *
     * @param User $user
     *
     * @return array
     */
    public function getToken(User $user)
    {
        return $this->container->get('lexik_jwt_authentication.encoder')
            ->encode([
                'username' => $user->getUsername(),
                'exp'      => $this->getTokenExpiryDateTime(),
            ]);
    }

    /**
     * Returns token expiration datetime.
     *
     * @return string Unixtmestamp
     */
    private function getTokenExpiryDateTime()
    {
        $tokenTtl = $this->container->getParameter('lexik_jwt_authentication.token_ttl');
        $now = new \DateTime();
        $now->add(new \DateInterval('PT' . $tokenTtl . 'S'));

        return $now->format('U');
    }
}
