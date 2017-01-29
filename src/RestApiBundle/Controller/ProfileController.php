<?php

namespace RestApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @RouteResource("profile", pluralize=false)
 */
class ProfileController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @Get("/profile/{user}")
     *
     * @ParamConverter("user", class="AppBundle:User")
     *
     * Note: Could be refactored to make use of the User Resolver in Symfony 3.2 onwards
     * more at : http://symfony.com/blog/new-in-symfony-3-2-user-value-resolver-for-controllers
     * @param UserInterface $user
     * @return UserInterface
     */
    public function getAction(UserInterface $user)
    {
        if ($user !== $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        return new JsonResponse($user);
    }
}