<?php

namespace App\Repository;

use App\Entity\Kategorija;
use App\Entity\Proizvod;
use App\Entity\ProizvodOprema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Kategorija|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kategorija|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kategorija[]    findAll()
 * @method Kategorija[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KategorijaRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Kategorija::class);
    }


    public function getLinks($productId): array {
        return $this->createQueryBuilder('k')
            ->select('k.id', 'k.name', 'k.seo', 'p.title', 'pl.id')
            ->distinct('pl.id')
            ->from(Proizvod::class, 'p')
            ->from(ProizvodOprema::class, 'pl' )
            ->andWhere('p.id = pl.proizvod')
            ->andWhere('p.id = :productId')
            ->setParameter(':productId', $productId)
            ->andWhere('pl.kategorija = k.id')
            ->andWhere('p.active = 1')
            ->andWhere('p.showProduct = 1')
            ->andWhere('k.active = 1')
            ->andWhere('k.showCategory = 1 ')
            ->orderBy('pl.id')
            ->getQuery()
            ->getResult();
    }


    public function getCategoryName($categoryId): string {
        return $this->createQueryBuilder('k')
            ->select('k.name')
            ->andWhere('k.id = :kategorijaId')
            ->setParameter(':kategorijaId', $categoryId)
            ->andWhere('k.active = 1')
            ->andWhere('k.showCategory = 1 ')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
