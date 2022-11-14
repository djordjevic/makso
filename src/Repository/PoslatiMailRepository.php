<?php

namespace App\Repository;

use App\Entity\PoslatiMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PoslatiMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method PoslatiMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method PoslatiMail[]    findAll()
 * @method PoslatiMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoslatiMailRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, PoslatiMail::class);
    }

}
