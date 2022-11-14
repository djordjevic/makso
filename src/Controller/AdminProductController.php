<?php

namespace App\Controller;

use App\Classes\Slugify;
use App\Entity\KomentarProizvoda;
use App\Entity\Proizvod;
use App\Form\ProizvodType;
use App\Service\UploadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductController extends AbstractController {
    /**
     * @Route("/admin/lista-proizvoda", name="app_admin_products_list")
     */
    public function listProducts(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository(Proizvod::class)->findBy(['showProduct' => 1]);
        return $this->render('admin_product/list.html.twig', [
            'proizvodi' => $products,
        ]);
    }

    /**
     * @Route("/admin/novi-proizvod/{id}", name="app_admin_new_product", defaults={"id": 0})
     */
    public function newProduct(Request $request, Proizvod $proizvod = null, UploadService $uploadService): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $oproizvodi = $em->getRepository(Proizvod::class)->findBy(['kategorija' => 4]);

        $message = 'Uspešno ste izmenili proizvod!';
        $opProizvodi = [];
        if (!$proizvod) {
            $message = 'Uspešno ste dodali novi proizvod!';
            $proizvod = new Proizvod();
            $prod = '';

        } else {
            $prod = $proizvod;
            $pro = $proizvod->getOptional();
            foreach ($pro as $pr) {
                $opProizvodi[] = $em->getRepository(Proizvod::class)->find($pr)->getTitle();
            }
        }
        $form = $this->createForm(ProizvodType::class, $proizvod, ['attr' => ['action' => $this->generateUrl('app_admin_new_product', ['id' => $proizvod->getId()])]]);
        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $var = $request->request->all();
                if (isset($var['optional'])) {
                    $proizvod->setOptional($var['optional']);
                }
                $proizvod->setTitle(strtoupper(trim($request->request->get('proizvod')['title'])));
                $proizvod->setProizvodjac(strtoupper(trim($request->request->get('proizvod')['proizvodjac'])));
                $proizvod->setSeo(Slugify::slugify($request->request->get('proizvod')['title']));
                if ($request->request->get('proizvod')['metaTitle'] == '') {
                    $proizvod->setMetaTitle(strtoupper(trim($request->request->get('proizvod')['title'])));
                }
                if ($request->request->get('proizvod')['metaDescription'] == '') {
                    $proizvod->setMetaDescription(trim($request->request->get('proizvod')['caracteristic']));
                }
                $file = $form->get('slikaMain')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlikaMain('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika1')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika1('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika2')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika2('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika3')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika3('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika4')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika4('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika5')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika5('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika6')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika6('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika7')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika7('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika8')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika8('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika9')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika9('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika10')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika10('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika11')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika11('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika12')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika12('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika13')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika13('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }
                $file = $form->get('slika14')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'products/' . $proizvod->getSeo() . '/');
                    $proizvod->setSlika14('assets/images/products/' . $proizvod->getSeo() . '/' . $fileName);
                }

                $em->persist($proizvod);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_products_list');
            }
        }
        return $this->render('admin_product/dodaj.html.twig', [
            'form' => $form->createView(),
            'prod' => $prod,
            'oproizvodi' => $oproizvodi,
            'opProizvodi' => $opProizvodi
        ]);
    }

    /**
     * @Route("/admin/vidi-proizvod/{id}", name="app_admin_view_product", defaults={"id": 0})
     */
    public function viewProduct(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Proizvod::class)->find($id);
        $pro = $product->getOptional();
        $comments = $em->getRepository(KomentarProizvoda::class)->findBy(['product' => $id]);
        $oProizvodi = [];
        foreach ($pro as $pr) {
            $oProizvodi[] = $em->getRepository(Proizvod::class)->find($pr)->getTitle();
        }
        return $this->render('admin_product/proizvod.html.twig', [
            'proizvod' => $product,
            'comments' => $comments,
            'oProizvodi' => $oProizvodi
        ]);
    }

    /**
     * @Route("/admin/obrisi-proizvod/{id}", name="app_admin_delete_product", defaults={"id": 0})
     */
    public function deleteProduct(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Proizvod::class)->find($id);
        $product->setShowProduct(0);
        $em->persist($product);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali proizvod!'
        );
        return $this->redirectToRoute('app_admin_products_list');

    }

}
