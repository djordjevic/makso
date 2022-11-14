<?php


namespace App\Repository;

use App\Entity\Korisnik;
use App\Service\OrderService;
use DateTime;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Query\ResultSetMapping;
use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Order::class);

    }

    public function saveOrder(Order $order, $ukupnaCena, $ukupnaCenaPdv, $korisnik) {
        $em = $this->getEntityManager();

        $order->setMember($korisnik);
        $order->setTotalPrice($ukupnaCena);
        $order->setTotalPricePdv($ukupnaCenaPdv);
        $em->persist($order);
        $em->flush();

        return $order;
    }

    public function update(Order $order) {
        $em = $this->getEntityManager();
        $em->persist($order);
        $em->flush();

        return $order;
    }


}
