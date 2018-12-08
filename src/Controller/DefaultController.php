<?php

namespace App\Controller;

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
     * @Route("/", name="default_index")
     */
    public function index()
    {
        /** @var UserRepository $userRepository
         *  @var User $user  
         */
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        return new Response($userRepository->findUserByUsername("9556399794")[0]->getParent()->getParent()->getPhone());
    }
}
