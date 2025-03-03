<?php

namespace App\Repository;

use App\Entity\QuizSubmission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuizSubmission>
 *
 * @method QuizSubmission|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuizSubmission|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuizSubmission[]    findAll()
 * @method QuizSubmission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizSubmissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
         parent::__construct($registry, QuizSubmission::class);
    }
    
    // Add your custom methods here if needed
}
