<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllOrderedByPriority(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('CASE r.priorite 
                WHEN \'Urgente\' THEN 1 
                WHEN \'Haute\' THEN 2 
                WHEN \'Moyenne\' THEN 3 
                WHEN \'Basse\' THEN 4 
                ELSE 5 END', 'ASC')
            ->addOrderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countReclamationsByEmail(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.email, COUNT(r.id) as count')
            ->groupBy('r.email')
            ->getQuery()
            ->getResult();
    }

    public function countByEmail(string $email): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByEmail(string $email): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.email = :email')
            ->setParameter('email', $email)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByEmailAndQuery(?string $email, ?string $query): array
    {
        $qb = $this->createQueryBuilder('r')
            ->where('r.email = :email')
            ->setParameter('email', $email);

        if ($query) {
            $qb->andWhere('r.sujet LIKE :query OR r.description LIKE :query')
               ->setParameter('query', '%' . $query . '%');
        }

        return $qb->orderBy('r.createdAt', 'DESC')
                 ->getQuery()
                 ->getResult();
    }

    public function searchReclamationsAdmin(?string $query, ?string $status, ?string $priority): array
    {
        $qb = $this->createQueryBuilder('r');

        if ($query) {
            $qb->andWhere('r.nom LIKE :query OR r.email LIKE :query OR r.message LIKE :query')
               ->setParameter('query', '%' . $query . '%');
        }

        if ($status) {
            $qb->andWhere('r.statut = :status')
               ->setParameter('status', $status);
        }

        if ($priority) {
            $qb->andWhere('r.priorite = :priority')
               ->setParameter('priority', $priority);
        }

        return $qb->orderBy('r.createdAt', 'DESC')
                 ->getQuery()
                 ->getResult();
    }

    public function searchReclamationsAdminFull(?string $query, ?string $status, ?string $priority, ?string $category, string $sort): array
    {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.category', 'c');

        if ($query) {
            $qb->andWhere('r.sujet LIKE :query OR r.description LIKE :query OR r.email LIKE :query')
               ->setParameter('query', '%' . $query . '%');
        }

        if ($status) {
            $qb->andWhere('r.statut = :status')
               ->setParameter('status', $status);
        }

        if ($priority) {
            $qb->andWhere('r.priorite = :priority')
               ->setParameter('priority', $priority);
        }

        if ($category) {
            $qb->andWhere('c.id = :category')
               ->setParameter('category', $category);
        }

        switch ($sort) {
            case 'date-asc':
                $qb->orderBy('r.createdAt', 'ASC');
                break;
            case 'priority-high':
                $qb->orderBy('CASE r.priorite 
                    WHEN \'Urgente\' THEN 1 
                    WHEN \'Haute\' THEN 2 
                    WHEN \'Moyenne\' THEN 3 
                    WHEN \'Basse\' THEN 4 
                    ELSE 5 END', 'ASC')
                   ->addOrderBy('r.createdAt', 'DESC');
                break;
            case 'priority-low':
                $qb->orderBy('CASE r.priorite 
                    WHEN \'Urgente\' THEN 1 
                    WHEN \'Haute\' THEN 2 
                    WHEN \'Moyenne\' THEN 3 
                    WHEN \'Basse\' THEN 4 
                    ELSE 5 END', 'DESC')
                   ->addOrderBy('r.createdAt', 'DESC');
                break;
            default: // date-desc
                $qb->orderBy('r.createdAt', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }
}
