<?php

namespace App\Repository;

use App\Entity\Akcija;
use App\Entity\Proizvod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;
use function Symfony\Component\DependencyInjection\Loader\Configurator\expr;

/**
 * @method Akcija|null find($id, $lockMode = null, $lockVersion = null)
 * @method Akcija|null findOneBy(array $criteria, array $orderBy = null)
 * @method Akcija[]    findAll()
 * @method Akcija[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AkcijaRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Akcija::class);
    }

}
