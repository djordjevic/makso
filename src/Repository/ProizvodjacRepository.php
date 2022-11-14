<?php

namespace App\Repository;

use App\Entity\Proizvodjac;
use App\Entity\Proizvod;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method Proizvodjac|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proizvodjac|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proizvodjac[]    findAll()
 * @method Proizvodjac[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProizvodjacRepository extends ServiceEntityRepository {

    private $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator) {
        parent::__construct($registry, Proizvodjac::class);
        $this->paginator = $paginator;
    }

    public function getHomeBrandMenu(): array {
        return $this->createQueryBuilder('b')
            ->select('b.id', 'b.name')
            ->andWhere('b.active = 1')
            ->andWhere('b.id <> 75')
            ->andWhere('b.showBrand = 1')
            ->andWhere('b.numOfProductsAim > 0')
            ->addOrderBy('b.name', 'ASC')
            ->setMaxResults(49)
            ->getQuery()
            ->getResult();
    }

//TODO: f-ja treba da vraca 9 random brand-ova

    public function getBrandsMostProduct(): array {
        return $this->createQueryBuilder('b')
            ->select('b.id', 'b.name', 'b.image')
            ->andWhere('b.active = 1')
            ->andWhere('b.id <> 75')
            ->andWhere('b.showBrand = 1')
            ->andWhere('b.numOfProductsAim > 0')
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(9)
            ->getQuery()
            ->getResult();
    }

    public function getAllBrandsPaginated(int $page): object {
        $dbQuery = $this->createQueryBuilder('b')
            ->select('b.id', 'b.name', 'b.image', 'b.numOfProductsAim', 'b.seo')
            ->andWhere('b.active = 1')
            ->andWhere('b.showBrand = 1')
            ->andWhere('b.id <> 75')
            ->andWhere('b.numOfProductsAim > 0')
            ->addOrderBy('b.name', 'ASC')
            ->getQuery();

        $pagination = $this->paginator->paginate($dbQuery, $page, 40);
        return $pagination;
    }

    public function getBrandsCount(): int {
        return $this->createQueryBuilder('b')
            ->select('COUNT (b.id)')
            ->andWhere('b.active = 1')
            ->andWhere('b.showBrand = 1')
            ->andWhere('b.id <> 75')
            ->andWhere('b.numOfProductsAim > 0')
            ->getQuery()
            ->getSingleScalarResult();
    }

}
