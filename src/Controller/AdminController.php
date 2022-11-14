<?php

namespace App\Controller;

use App\Entity\Dobavljac;
use App\Entity\Kategorija;
use App\Entity\KomentarProizvoda;
use App\Entity\Order;
use App\Entity\Proizvod;
use App\Entity\Rezervacija;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController {
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();

        $firmaCount = $em->getRepository(User::class)->count(['firmaIliFizickoLice' => 1]);
        $korisnikCount = $em->getRepository(User::class)->count(['firmaIliFizickoLice' => 2]);
        $gazdinstvaCount = $em->getRepository(User::class)->count(['firmaIliFizickoLice' => 4]);
        $ukupnoUsers = $firmaCount + $korisnikCount + $gazdinstvaCount;

        $ukupnoOrders = $em->getRepository(Order::class)->count([]);
        $oNregCount = $em->getRepository(Order::class)->count(['member' => null]);
        $oRegCount = $ukupnoOrders - $oNregCount;
        $oIsporCount = $em->getRepository(Order::class)->count(['orderStatus' => 2]);


        $aComments = $em->getRepository(KomentarProizvoda::class)->count(['active' => true]);
        $nComments = $em->getRepository(KomentarProizvoda::class)->count(['active' => false]);
        $ukupnoComments = $aComments + $nComments;

        $ukupnaVrednostIsporucenih = 0;
        $orders = $em->getRepository(Order::class)->findBy(['orderStatus' => 2]);
        foreach ($orders as $order) {
            $ukupnaVrednostIsporucenih = $ukupnaVrednostIsporucenih + $order->getTotalPricePdv();
        }

        $ukupnaVrednostKreiranih = 0;
        $orders = $em->getRepository(Order::class)->findBy(['orderStatus' => 1]);
        foreach ($orders as $order) {
            $ukupnaVrednostKreiranih = $ukupnaVrednostKreiranih + $order->getTotalPricePdv();
        }
        $ukupnaVrednost = $ukupnaVrednostKreiranih + $ukupnaVrednostIsporucenih;

        $kat = $em->getRepository(Kategorija::class)->findBy([], ['id' => 'desc']);
        $dob= $em->getRepository(Dobavljac::class)->findBy([], ['id' => 'desc']);
        $pro = $em->getRepository(Proizvod::class)->findBy([], ['id' => 'desc']);
        $kom = $em->getRepository(KomentarProizvoda::class)->findBy([], ['id' => 'desc']);

        $upiti = $em->getRepository(Rezervacija::class)->findBy([], ['id' => 'desc']);
//        $commentsCount = $em->getRepository(Order::class)->count(['member' => $user->getId()]);
//        $promet = $em->getRepository(Order::class)->count(['member' => $user->getId()]);




        return $this->render('admin/index.html.twig', [
            'user' => $this->getUser(),
            'firmaCount' => $firmaCount,
            'korisnikCount' => $korisnikCount,
            'gazdinstvaCount' => $gazdinstvaCount,
            'ukupnoUsers' => $ukupnoUsers,
            'oRegCount' => $oRegCount,
            'oNregCount' => $oNregCount,
            'oIsporCount' => $oIsporCount,
            'ukupnoOrders' => $ukupnoOrders,
            'aComments' => $aComments,
            'nComments' => $nComments,
            'ukupnoComments' => $ukupnoComments,
            'ukupnaVrednostIsporucenih' => $ukupnaVrednostIsporucenih,
            'ukupnaVrednostKreiranih' => $ukupnaVrednostKreiranih,
            'ukupnaVrednost' => $ukupnaVrednost,
            'kat' => $kat,
            'dob' => $dob,
            'pro' => $pro,
            'kom' => $kom,
            'upiti' => $upiti
        ]);
    }




}
