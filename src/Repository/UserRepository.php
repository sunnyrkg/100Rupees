<?php // src/AppBundle/Repository/ProductRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use App\Entity\User;

class UserRepository extends EntityRepository
{
    public function findUserByUsername(String $username): array
    {
         $query = $this->getEntityManager()->createQuery("SELECT u FROM App\Entity\User u WHERE u.username = :username");
         $query->setParameter("username", $username);
         return $query->execute();
    }
}
?>