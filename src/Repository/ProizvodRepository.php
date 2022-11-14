<?php

namespace App\Repository;


use App\Entity\Kategorija;
use App\Entity\Proizvod;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;




/**
 * @method Proizvod|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proizvod|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proizvod[]    findAll()
 * @method Proizvod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProizvodRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Proizvod::class);
    }
    public function getProducts($var, $vp, $catsIds) {

        $qb = $this->createQueryBuilder('b');
        if (isset($var['kategorija'])) {
            $potkat = $var['kategorija'];
        } else {
            $potkat = $catsIds;
        }
        $qb->where($qb->expr()->in('b.kategorija', $potkat));
        if (isset($var['tag']['nov'])) {
            $qb->andWhere($qb->expr()->in('b.flNewProduct', [1]));
        }
        if (isset($var['tag']['popust'])) {
            if ($vp == 1) {
                $qb->andWhere($qb->expr()->in('b.flDiscountVp', [1]));
            } else {
                $qb->andWhere($qb->expr()->in('b.flDiscount', [1]));
            }
        }
        if (isset($var['tag']['stanje'])) {
            $qb->andWhere($qb->expr()->in('b.flOutOfStock', [0]));
        }
        if (isset($var['atribut'])) {
            $atributi = $var['atribut'];
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->in('b.atr1', $atributi),
                $qb->expr()->in('b.atr2', $atributi),
                $qb->expr()->in('b.atr3', $atributi),
                $qb->expr()->in('b.atr4', $atributi),
                $qb->expr()->in('b.atr5', $atributi),
                $qb->expr()->in('b.atr6', $atributi),
                $qb->expr()->in('b.atr7', $atributi),
                $qb->expr()->in('b.atr8', $atributi),
                $qb->expr()->in('b.atr9', $atributi),
                $qb->expr()->in('b.atr10', $atributi)
            ));
        }
        return $qb->orderBy('b.id')->getQuery()->getResult();

    }

    public function findProducts($cat) {

        $qb = $this->createQueryBuilder('b');
        $qb->where($qb->expr()->in('b.kategorija', $cat));
        return $qb->orderBy('b.id')->getQuery()->getResult();
    }

    public function searchProducts($keyword) {
        $qb = $this->createQueryBuilder('p');
        $qb->andWhere(
            $qb->expr()->like('p.title', ':val')
        )->setParameter('val', '%' . $keyword . '%');
        $qb->orderBy('p.id', 'ASC');
        return $qb->getQuery()->getResult();
    }

}
