<?php

namespace App\Repository;

use App\Entity\Akcija;
use App\Entity\Proizvod;
use App\Entity\ProizvodAkcija;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProizvodAkcija|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProizvodAkcija|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProizvodAkcija[]    findAll()
 * @method ProizvodAkcija[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProizvodAkcijaRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, ProizvodAkcija::class);
    }

}
