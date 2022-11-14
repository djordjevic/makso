<?php

namespace App\Repository;

use App\Entity\ProizvodStatistika;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProizvodStatistika|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProizvodStatistika|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProizvodStatistika[]    findAll()
 * @method ProizvodStatistika[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProizvodStatistikaRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, ProizvodStatistika::class);
    }

    public function addStatistic(ProizvodStatistika $proizvodStatistika) {
        $em = $this->getEntityManager();
        $em->persist($proizvodStatistika);
        $em->flush();

    }
    public function updateStatistic(int $visits, int $proizvodId) {
        return $this->createQueryBuilder('ps')
            ->update(ProizvodStatistika::class, 'ps')
            ->set('ps.visits', ':visits')
            ->where('ps.proizvod = :proizvodId')
            ->setParameter('visits', $visits)
            ->setParameter('proizvodId', $proizvodId)
            ->getQuery()
            ->execute();
    }
}
