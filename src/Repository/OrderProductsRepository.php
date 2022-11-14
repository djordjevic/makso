<?php


namespace App\Repository;


use App\Entity\Dobavljac;
use App\Entity\Kategorija;
use App\Entity\Order;
use App\Entity\OrderProducts;
use App\Entity\Proizvod;
use App\Entity\Proizvodjac;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderProducts[]    findAll()
 * @method OrderProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class OrderProductsRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, OrderProducts::class);
    }

    public function saveProducts($order, $basket) {
        $em = $this->getEntityManager();
        foreach ($basket as $product) {
            $orderProducts = new OrderProducts();
            $orderProducts->setMember($order->getMember());
            $orderProducts->setOrder($order);
            $orderProducts->setQuantity($product['qty']);
            $proizvod = $em->getRepository(Proizvod::class)->findOneBy(['id' => $product['pid']]);
            $orderProducts->setProizvod($proizvod);
            $orderProducts->setProductName($proizvod->getTitle());
            $orderProducts->setKategorija($proizvod->getKategorija());
            $orderProducts->setProizvodjac($proizvod->getProizvodjac());
            $orderProducts->setSeller($proizvod->getSeller());


            if (!empty($order->getMember())) {
                if (($order->getMember()->getFirmaIliFizickoLice() == 1) or ($order->getMember()->getFirmaIliFizickoLice() == 4)){
                    if ($proizvod->getFlDiscountVp() == 1) {
                        if ($proizvod->getDiscountVpPriceDin() > 1) {
                            $cena = $proizvod->getDiscountVpPriceDin();
                        } else {
                            $cena = $proizvod->getDiscountVpPriceEur();
                        }
                    } else {
                        if ($proizvod->getPriceVpDin() > 1) {
                            $cena = $proizvod->getPriceVpDin();
                        } else {
                            $cena = $proizvod->getPriceVpEur();
                        }
                    }
                } else {
                    if ($proizvod->getFlDiscount() == 1) {
                        if ($proizvod->getDiscountPriceDin() > 1) {
                            $cena = $proizvod->getDiscountPriceDin();
                        } else {
                            $cena = $proizvod->getDiscountPriceEur();
                        }
                    } else {
                        if ($proizvod->getPriceDin() > 1) {
                            $cena = $proizvod->getPriceDin();
                        } else {
                            $cena = $proizvod->getPriceEur();
                        }
                    }
                }
            } else {
                if ($proizvod->getFlDiscount() == 1) {
                    if ($proizvod->getDiscountPriceDin() > 1) {
                        $cena = $proizvod->getDiscountPriceDin();
                    } else {
                        $cena = $proizvod->getDiscountPriceEur();
                    }
                } else {
                    if ($proizvod->getPriceDin() > 1) {
                        $cena = $proizvod->getPriceDin();
                    } else {
                        $cena = $proizvod->getPriceEur();
                    }
                }
            }

            $orderProducts->setPrice($cena);
            $orderProducts->setPricePdv($cena *  (($proizvod->getTaxPercentage()/100) + 1));

            $em->persist($orderProducts);

        }

//        $order->setTotalPrice($totalPrice);
//        $em->getRepository(Order::class)->update($order);
        $em->flush();
//        return $order;
    }



}