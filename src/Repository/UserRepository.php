<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    // Exemple de méthode personnalisée pour trouver un utilisateur par son nom d'utilisateur
    public function findOneByUsername(string $username): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }

    // Exemple de méthode personnalisée pour trouver un utilisateur par son ID
    public function findOneById(int $id): ?User
    {
        return $this->find($id);
    }

    // Méthode pour ajouter un utilisateur (exemple d'insertion)
    public function addUser(User $user): void
    {
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // Méthode pour supprimer un utilisateur (exemple de suppression)
    public function removeUser(User $user): void
    {
        $this->_em->remove($user);
        $this->_em->flush();
    }
}
