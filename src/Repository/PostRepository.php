<?php

namespace App\Repository;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @extends ServiceEntityRepository<Post>
 */
class PostRepository  extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * @return Post[] Returns an array of Post objects ordered by creation date
     */
    public function findLatest(int $limit): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    public function getPaginatedPosts(): Query
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery();
    }
}