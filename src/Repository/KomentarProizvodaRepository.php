<?php


namespace App\Repository;


use App\Entity\KomentarProizvoda;
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
class KomentarProizvodaRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, KomentarProizvoda::class);
    }
    public function addComment(KomentarProizvoda $komentarProizvoda) {
        $em = $this->getEntityManager();
        $em->persist($komentarProizvoda);
        $em->flush();

    }

}