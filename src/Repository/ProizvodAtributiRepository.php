<?php

namespace App\Repository;

use App\Entity\Proizvod;
use App\Entity\ProizvodAtributi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProizvodAtributi|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProizvodAtributi|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProizvodAtributi[]    findAll()
 * @method ProizvodAtributi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProizvodAtributiRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, ProizvodAtributi::class);
    }

}
