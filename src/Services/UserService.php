<?php // src/AppBundle/Repository/ProductRepository.php
namespace App\Services;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator;

class UserService
{
    private $entityManager;
    /**
     * UserService constructor.
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function getUserByUsername(String $username): User
    {
        /** @var UserRepository $userRepository */
        $userRepository = $this->entityManager->getRepository(User::class);
        return $userRepository->findUserByUsername($username)[0];
    }
}
?>