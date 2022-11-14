<?php


namespace App\Repository;


use App\Entity\Subscribe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;
use PDO;

/**
 * @method KomentarProizvoda|null find($id, $lockMode = null, $lockVersion = null)
 * @method KomentarProizvoda|null findOneBy(array $criteria, array $orderBy = null)
 * @method KomentarProizvoda[]    findAll()
 * @method KomentarProizvoda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubscribeRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Subscribe::class);
    }
    public function addSub(Subscribe $subscribe) {
        $em = $this->getEntityManager();
        $em->persist($subscribe);
        $em->flush();

    }

}