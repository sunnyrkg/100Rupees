<?php

namespace App\Controller;

use App\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * @Route("/default", name="default")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/{usernameInPath}", name="default_index")
     *
     */
    public function index($usernameInPath)
    {
        /** @var UserRepository $userRepository
         *  @var User $user  
         */
        $userService = new UserService($this->getDoctrine()->getManager());
        return new Response($userService->getUserByUsername($usernameInPath)->getParent()->getParent()->getName());
    }
}
