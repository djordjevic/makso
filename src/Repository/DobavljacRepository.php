<?php

namespace App\Repository;

use App\Entity\Dobavljac;
use App\Entity\Uvoznik;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dobavljac|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dobavljac|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dobavljac[]    findAll()
 * @method Dobavljac[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DobavljacRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Dobavljac::class);
    }

}
