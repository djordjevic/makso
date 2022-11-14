<?php

namespace App\Controller;

use App\Entity\Kategorija;
use App\Entity\KomentarProizvoda;
use App\Entity\Order;
use App\Entity\OrderProducts;
use App\Entity\Proizvod;

use App\Entity\ProizvodAtributi;
use App\Entity\Proizvodjac;

use App\Entity\Rezervacija;
use App\Form\RezervacijaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\ProizvodStatistika;
use App\Entity\WebsiteTag;
use App\Form\KomentarProizvodaType;
use App\Form\OrderType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController {
    /**
     * @Route("/prodavnica/prikolice", name="prodavnica_prikolica")
     */
    public function prikolicaList(PaginatorInterface $paginator, Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $var = $request->request->all();

        if (!empty ($var['kategorija'])){
            $kat = $var['kategorija'];
        } else {
            $kat = [2, 3, 4];
        }
        if (!empty ($var['atribut'])){
            $atr = $var['atribut'];
        } else {
            $atr = [];
        }
        if (!empty ($var['tag'])){
            $tag = $var['tag'];
        } else {
            $tag = [];
        }
        $user = $this->getUser();
        $vp = 0;
        if (!is_null($user)) {
            if (($user->getFirmaIliFizickoLice() == 1) or ($user->getFirmaIliFizickoLice() == 4) ){
                $vp = 1;
            }
        }

        $filter = ['kat' => $kat, 'atr' => $atr, 'tag' => $tag];
        $catsIds = [2, 3, 4];

        if (!empty ($var)) {
            $products = $em->getRepository(Proizvod::class)->getProducts($var, $vp, $catsIds);
        } else {
            $products = $em->getRepository(Proizvod::class)->findProducts($catsIds);
        }

        $count = sizeof($products);
        $categories = $em->getRepository(Kategorija::class)->findBy(['parentCategoryId' => 1]);
        $atributes = $em->getRepository(ProizvodAtributi::class)->findBy(['active' => 1, 'kategorija' => 1]);

        return $this->render('shop/index.html.twig', [

            'paginationProducts' => $products,
            'category' => $categories,
            'atribute' => $atributes,
            'filter' => $filter,
            'count' => $count
        ]);
    }

    /**
     * @Route("/prodavnica/traktori", name="prodavnica_traktor")
     */
    public function traktorList(PaginatorInterface $paginator, Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $var = $request->request->all();

        if (!empty ($var['kategorija'])){
            $kat = $var['kategorija'];
        } else {
            $kat = [];
        }
        if (!empty ($var['atribut'])){
            $atr = $var['atribut'];
        } else {
            $atr = [];
        }
        if (!empty ($var['tag'])){
            $tag = $var['tag'];
        } else {
            $tag = [];
        }
        $user = $this->getUser();
        $vp = 0;
        if (!is_null($user)) {
            if (($user->getFirmaIliFizickoLice() == 1) or ($user->getFirmaIliFizickoLice() == 4) ){
                $vp = 1;
            }
        }

        $filter = ['kat' => $kat, 'atr' => $atr, 'tag' => $tag];
        $catsIds = [5];

        if (!empty ($var)) {
            $products = $em->getRepository(Proizvod::class)->getProducts($var, $vp, $catsIds);
        } else {
            $products = $em->getRepository(Proizvod::class)->findProducts($catsIds);
        }

        $count = sizeof($products);
        $categories = $em->getRepository(Kategorija::class)->findBy(['parentCategoryId' => 5]);
        $atributes = $em->getRepository(ProizvodAtributi::class)->findBy(['active' => 1, 'kategorija' => 5]);

        return $this->render('shop/index_traktori.html.twig', [

            'paginationProducts' => $products,
            'category' => $categories,
            'atribute' => $atributes,
            'filter' => $filter,
            'count' => $count
        ]);
    }

    /**
     * @Route("/prodavnica/kuke", name="prodavnica_kuka")
     */
    public function kukeList(PaginatorInterface $paginator, Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $var = $request->request->all();

        if (!empty ($var['kategorija'])){
            $kat = $var['kategorija'];
        } else {
            $kat = [];
        }
        if (!empty ($var['atribut'])){
            $atr = $var['atribut'];
        } else {
            $atr = [];
        }
        if (!empty ($var['tag'])){
            $tag = $var['tag'];
        } else {
            $tag = [];
        }
        $user = $this->getUser();
        $vp = 0;
        if (!is_null($user)) {
            if (($user->getFirmaIliFizickoLice() == 1) or ($user->getFirmaIliFizickoLice() == 4) ){
                $vp = 1;
            }
        }

        $filter = ['kat' => $kat, 'atr' => $atr, 'tag' => $tag];
        $catsIds = [6];

        if (!empty ($var)) {
            $products = $em->getRepository(Proizvod::class)->getProducts($var, $vp, $catsIds);
        } else {
            $products = $em->getRepository(Proizvod::class)->findProducts($catsIds);
        }

        $count = sizeof($products);
        $categories = $em->getRepository(Kategorija::class)->findBy(['parentCategoryId' => 6]);
        $atributes = $em->getRepository(ProizvodAtributi::class)->findBy(['active' => 1, 'kategorija' => 6]);

        return $this->render('shop/index_kuke.html.twig', [

            'paginationProducts' => $products,
            'category' => $categories,
            'atribute' => $atributes,
            'filter' => $filter,
            'count' => $count
        ]);
    }

    /**
     * @Route("/prodavnica/izdavanje", name="prodavnica_izdavanje")
     */
    public function izdavanje(PaginatorInterface $paginator, Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $rezervacija = new Rezervacija();
        $form = $this->createForm(RezervacijaType::class, $rezervacija);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($rezervacija);
                $em->flush();
                return $this->redirectToRoute('pocetna');
            }
        }
        return $this->render('shop/izdavanje.html.twig', [
                'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/korpa", name="korpa")
     */
    public function cartList(SessionInterface $session): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();

        if ($session->has('basket')) {
            $productsBasket = $session->get('basket');
            $productDatas = [];
            $korisnik = $this->getUser();

            $ukupnaCena = 0;
            $ukupnaCenaPdv = 0;
            foreach($productsBasket as $product) {
                $productData = $em->getRepository(Proizvod::class)->find(intval($product['pid']));
                $ukupnaCenaDin = $productData->getPriceDin() * $product['qty'];
                $ukupnaCenaEur = $productData->getPriceEur() * $product['qty'];
                $ukupnaCenaDinVp = $productData->getPriceVpDin() * $product['qty'];
                $ukupnaCenaEurVp = $productData->getPriceVpEur() * $product['qty'];

                $ukupnaCenaDinP = $productData->getDiscountPriceDin() * $product['qty'];
                $ukupnaCenaEurP = $productData->getDiscountPriceEur() * $product['qty'];
                $ukupnaCenaDinVpP = $productData->getDiscountVpPriceDin() * $product['qty'];
                $ukupnaCenaEurVpP = $productData->getDiscountVpPriceEur() * $product['qty'];


                if (!empty($korisnik)) {
                    if (($korisnik->getFirmaIliFizickoLice() == 1) or ($korisnik->getFirmaIliFizickoLice() == 4)){
                        if ($productData->getFlDiscountVp() == 1) {
                            if ($productData->getDiscountVpPriceDin() > 1) {
                                $cena = $productData->getDiscountVpPriceDin();
                                $cenaPdv = $productData->getDiscountVpPriceDin() * (($productData->getTaxPercentage()/100) + 1);
                            } else {
                                $cena = $productData->getDiscountVpPriceEur();
                            }
                        } else {
                            if ($productData->getPriceVpDin() > 1) {
                                $cena = $productData->getPriceVpDin();
                                $cenaPdv = $productData->getPriceVpDin() * (($productData->getTaxPercentage()/100) + 1);
                            } else {
                                $cena = $productData->getPriceVpEur();
                            }
                        }
                    } else {
                        if ($productData->getFlDiscount() == 1) {
                            if ($productData->getDiscountPriceDin() > 1) {
                                $cena = $productData->getDiscountPriceDin();
                                $cenaPdv = $productData->getDiscountPriceDin() * (($productData->getTaxPercentage()/100) + 1);
                            } else {
                                $cena = $productData->getDiscountPriceEur();
                            }
                        } else {
                            if ($productData->getPriceDin() > 1) {
                                $cena = $productData->getPriceDin();
                                $cenaPdv = $productData->getPriceDin() * (($productData->getTaxPercentage()/100) + 1);
                            } else {
                                $cena = $productData->getPriceEur();
                            }
                        }
                    }
                } else {
                    if ($productData->getFlDiscount() == 1) {
                        if ($productData->getDiscountPriceDin() > 1) {
                            $cena = $productData->getDiscountPriceDin();
                            $cenaPdv = $productData->getDiscountPriceDin() * (($productData->getTaxPercentage()/100) + 1);
                        } else {
                            $cena = $productData->getDiscountPriceEur();
                        }
                    } else {
                        if ($productData->getPriceDin() > 1) {
                            $cena = $productData->getPriceDin();
                            $cenaPdv = $productData->getPriceDin() * (($productData->getTaxPercentage()/100) + 1);
                        } else {
                            $cena = $productData->getPriceEur();
                        }
                    }
                }

                $ukupnaCena = $ukupnaCena + ($cena * $product['qty']);
                $ukupnaCenaPdv = $ukupnaCenaPdv + ($cenaPdv * $product['qty']);

//                if ($productSolr->isMegaDiscount()) {
//                    $megaDiscountData = $em->getRepository(ProizvodMegaPopust::class)->findOneBy(['proizvod' => $product['pid'], 'flMegaDiscount' => 1]);
//                    $productData[] = ['pid' => $product['pid'], 'qty' => $product['qty'], 'kurs' => $kurs, 'product' => $productSolr, 'megaDiscount' => $megaDiscountData];
//                } else {
//                    $productData[] = ['pid' => $product['pid'], 'qty' => $product['qty'], 'kurs' => $kurs, 'product' => $productSolr];
//                }
                $productDatas[] = [
                    'pid' => $product['pid'],
                    'qty' => $product['qty'],
                    'product' => $productData,
                    'ukupnaCenaDin' => $ukupnaCenaDin,
                    'ukupnaCenaEur' => $ukupnaCenaEur,
                    'ukupnaCenaDinVp' => $ukupnaCenaDinVp,
                    'ukupnaCenaEurVp' => $ukupnaCenaEurVp,
                    'ukupnaCenaDinP' => $ukupnaCenaDinP,
                    'ukupnaCenaEurP' => $ukupnaCenaEurP,
                    'ukupnaCenaDinVpP' => $ukupnaCenaDinVpP,
                    'ukupnaCenaEurVpP' => $ukupnaCenaEurVpP
                ];
            }


            if ($session->has('basketCheckout')) {
                $session->remove('basketCheckout');
            }
            $session->set('basketCheckout', $productDatas);

            if ($session->has('basketUkupno')) {
                $session->remove('basketUkupno');
            }
            $session->set('basketUkupno', $ukupnaCena);

            if ($session->has('basketUkupnoPdv')) {
                $session->remove('basketUkupnoPdv');
            }
            $session->set('basketUkupnoPdv', $ukupnaCenaPdv);

            return $this->render('shop/korpa.html.twig', [
                'basket' => $productDatas,
                'ukupno' => $ukupnaCena,
                'ukupnoPdv' => $ukupnaCenaPdv
            ]);
        }

        return $this->render('shop/korpa.html.twig', [

        ]);
    }

    /**
     * @Route("/korpa/dodaj", name="korpa_dodaj")
     */
    public function basketAdd(Request $request, SessionInterface $session) {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $proizvod = [];
        $pid = $request->get('pid');
        $qty = $request->get('qty');

        if (!empty($request->get('quantity'))) {
            $qty = $request->get('quantity');
        }
        if ($session->has('basket')) {
            $proizvod = $session->get('basket');
            foreach ($proizvod as $product) {
                if ($product['pid'] == $pid) {
                    $this->addFlash('error', 'Proizvod već postoji u korpi!');
                    return $this->redirectToRoute('korpa');
                }
            }
        }
        $proizvod[] = ['pid' => $pid, 'qty' => $qty];
        $session->set('basket', $proizvod);
        $this->addFlash('success', 'Proizvod je uspešno dodat u korpu!');
        return $this->redirectToRoute('korpa');
    }

    /**
     * @Route("/korpa/delete/{id}/", name="korpa_ukloni")
     */
    public function basketDelete( $id, SessionInterface $session) {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        if ($session->has('basket')) {
            $proizvod = $session->get('basket');
            foreach ($proizvod as $i => $product) {
                if ($proizvod[$i]['pid'] == $id) {
                    array_splice($proizvod, $i, 1);
                    break;
                }
            }
            $session->set('basket', $proizvod);
            $this->addFlash('error', 'Proizvod je obrisan!');
            return $this->redirectToRoute('korpa');
        }
        return false;
    }

    /**
     * @Route("/korpa/preracun/", name="korpa_preracunaj")
     */
    public function basketPreracun( Request $request, SessionInterface $session) {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        if ($session->has('basket')) {
            $data = $request->request->all();
            $session->remove('basket');
            $proizvod = [];
            foreach ($data as $pid => $qty) {
                if (substr($pid, 0, 5) == 'pQty_') {
                    $pid = substr($pid, 5);
                    if ($qty != 0) {
                        $proizvod[] = ['pid' => $pid, 'qty' => $qty];
                    }
                } else {
                    break;
                }
            }
            $session->set('basket', $proizvod);
            return $this->redirectToRoute('korpa');
        }
        return false;
    }

    /**
     * @Route("/kasa", name="kasa")
     */
    public function checkout(Request $request, SessionInterface $session, MailerInterface $mailer): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $porudzbina = new Order();
        $korisnik = $this->getUser();
        if (!empty($korisnik)) {
            if ($korisnik->getFirmaIliFizickoLice() == 1) {
                $porudzbina->setFirmaPrimaoca($korisnik->getNazivFirme());
            }
            if(!empty($korisnik->getFirstNamePrimaoc())) {
                $porudzbina->setImePrimaoca($korisnik->getFirstNamePrimaoc());
            } else{
                $porudzbina->setImePrimaoca($korisnik->getFirstName());
            }
            if(!empty($korisnik->getLastNamePrimaoc())) {
                $porudzbina->setPrezimePrimaoca($korisnik->getLastNamePrimaoc());
            } else {
                $porudzbina->setPrezimePrimaoca($korisnik->getLastName());
            }
            if(!empty($korisnik->getAddressPrimaoc())) {
                $porudzbina->setAdresaPrimaoca($korisnik->getAddressPrimaoc());
            } else {
                $porudzbina->setAdresaPrimaoca($korisnik->getAddress());
            }
            if(!empty($korisnik->getCityPrimaoc())) {
                $porudzbina->setGradPrimaoca($korisnik->getCityPrimaoc());
            } else {
                $porudzbina->setGradPrimaoca($korisnik->getCity());
            }
            if(!empty($korisnik->getPostanskiBrPrimaoc())) {
                $porudzbina->setPttPrimaoca($korisnik->getPostanskiBrPrimaoc());
            } else {
                $porudzbina->setPttPrimaoca($korisnik->getPostanskiBroj());
            }
            if(!empty($korisnik->getMobPhonePrimaoc())) {
                $porudzbina->setTelefonPrimaoca($korisnik->getMobPhonePrimaoc());
            } else {
                $porudzbina->setTelefonPrimaoca($korisnik->getMobPhone());
            }
            $porudzbina->setEmailPrimaoca($korisnik->getEmail());
        }

        $basket = $session->get('basketCheckout');
        $ukupnaCena = $session->get('basketUkupno');
        $ukupnaCenaPdv = $session->get('basketUkupnoPdv');

        $form = $this->createForm(OrderType::class, $porudzbina, ['action' => $this->generateUrl('kasa'), 'method' => 'post']);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $porudzbina = $form->getData();
                $order = $em->getRepository(Order::class)->saveOrder($porudzbina, $ukupnaCena, $ukupnaCenaPdv, $korisnik);
                $orderFinish = $em->getRepository(OrderProducts::class)->saveProducts($order, $basket);
                $orderProducts = $em->getRepository(OrderProducts::class)->findBy(['order' => $order->getId()]);

                $email = (new TemplatedEmail())
                    ->from(new Address('registracija@prikolica.rs', 'Porudžbina'))
                    ->to($order->getEmailPrimaoca())
                    ->subject('Porudzbina')
                    ->htmlTemplate('shop/porudzbina.html.twig')
                    ->context([
                        'order' => $order,
                        'orderProducts' => $orderProducts,
                    ]);

                $mailer->send($email);

                if ($session->has('basketCheckout')) {
                    $session->remove('basketCheckout');
                }
                if ($session->has('basketUkupno')) {
                    $session->remove('basketUkupno');
                }
                if ($session->has('basketUkupnoPdv')) {
                    $session->remove('basketUkupnoPdv');
                }
                if ($session->has('basket')) {
                    $session->remove('basket');
                }

                return $this->render('shop/success.html.twig', [
                    'order' => $order,
                    'orderProducts' => $orderProducts,
                ]);
            }
        }

        return $this->render('shop/kasa.html.twig', [
            'form' => $form->createView(),
            'basket' => $basket,
            'ukupno' => $ukupnaCena,
            'ukupnoPdv' => $ukupnaCenaPdv
        ]);
    }

    /**
     * @Route("/proizvod/{id}/", name="proizvod")
     */
    public function product(int $id,  SessionInterface $session): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $productData = $em->getRepository(Proizvod::class)->find($id);
        $commentData = $em->getRepository(KomentarProizvoda::class)->findBy(['product' => $id, 'active' => 1]);
        $randomProducts = $em->getRepository(Proizvod::class)->findAll();
        shuffle($randomProducts);
//        $commentData = $em->getRepository(KomentarProizvoda::class)->findBy(['product' => $id, 'active' => 1], ['time' => 'ASC']);
//        $metaData = $em->getRepository(WebsiteTag::class)->getMetaData('proizvodi');

        $statisticData = $em->getRepository(ProizvodStatistika::class)->findOneBy(['proizvod' => $id]);
        $statistika = new ProizvodStatistika();

        if (!$statisticData) {
            $statistika->setVisits(1);
            $statistika->setProizvod($productData);
            $em->getRepository(ProizvodStatistika::class)->addStatistic($statistika);
        } else {
            $visitsCount = $statisticData -> getVisits();
            $visitsCount = $visitsCount + 1;
            $em->getRepository(ProizvodStatistika::class)->updateStatistic($visitsCount, $id);
        }

        return $this->render('shop/proizvod.html.twig', [

            'product' => $productData,
            'comment' => $commentData,
            'randomProducts' => $randomProducts,
//            'metaData' => $metaData,

        ]);
    }

    /**
     * @Route("/proizvod/form/{id}/", name="proizvod_komentar", defaults={"id": 0}))
     * @param Request $request
     * @return Response
     */
    public function komentarForm(int $id, Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $proizvod = $em->getRepository(Proizvod::class)->find($id);
        $komentar = new KomentarProizvoda();
        $komentar->setProduct($proizvod);
        $form = $this->createForm(KomentarProizvodaType::class, $komentar, ['action' => $this->generateUrl('proizvod_komentar', ['id' => $proizvod->getId()])]);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                if (!empty ($this->getUser())) {
                    $komentar->setMember($this->getUser());
                }
                $em->getRepository(KomentarProizvoda::class)->addComment($komentar);
                return $this->redirectToRoute('proizvod', ['id' => $id]);

            }
        }

        return $this->render('shop/komentar_form.html.twig', ['komentar_forma' => $form->createView()]);
    }

    /**
     * @Route("/pretraga/rezultati/{page}/", defaults={"page": "1"}, name="pretraga")
     * @param Request $request
     * @return Response
     */
    public function pretraga(int $page, Request $request, PaginatorInterface $paginator): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
//        $metaData = $em->getRepository(WebsiteTag::class)->getMetaData('pretraga');
        $keywords = $request->query->get('keywords');

        $products = $em->getRepository(Proizvod::class)->searchProducts($keywords);
        $paginationProducts = $paginator->paginate($products, $page, 10);
        $paginationProducts->setTemplate('paginator/template.html.twig');

        return $this->render('shop/search.html.twig', [
            'paginationProducts' => $paginationProducts,
            'pageNumber' => $page,
            'keywords' => $keywords
        ]);
//        $paginationProducts = $paginator->paginate($solr, $page, 20);
//
//        return $this->render('product/list_pretraga.html.twig',[
//
//            'paginationProducts' => $paginationProducts,
//            'pageNumber' => $page,
//            'keywords' => $keywords
//        ]);
    }
}
