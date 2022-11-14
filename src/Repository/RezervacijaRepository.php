<?php

namespace App\Repository;

use App\Entity\Rezervacija;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use function Symfony\Component\DependencyInjection\Loader\Configurator\expr;

/**
 * @method Rezervacija|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rezervacija|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rezervacija[]    findAll()
 * @method Rezervacija[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RezervacijaRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Rezervacija::class);
    }

}
