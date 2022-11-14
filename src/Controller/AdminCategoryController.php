<?php

namespace App\Controller;

use App\Entity\Kategorija;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategoryController extends AbstractController {
    /**
     * @Route("/admin/lista-kategorija", name="app_admin_categories_list")
     */
    public function listCategories(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Kategorija::class)->findBy(['showCategory' => 1]);

        return $this->render('admin_category/list.html.twig', [
            'kategorije' => $categories,
        ]);
    }

    /**
     * @Route("/admin/nova-kategorija/{id}", name="app_admin_new_category", defaults={"id": 0})
     */
    public function newCategory(Request $request, Kategorija $kategorija = null): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili kategoriju!';
        if (!$kategorija) {
            $message = 'Uspešno ste dodali novu katagoriju!';
            $kategorija = new Kategorija();
        }
        $form = $this->createForm(CategoryType::class, $kategorija, ['attr' => ['action' => $this->generateUrl('app_admin_new_category', ['id' => $kategorija->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $kategorija->setName(strtoupper(trim($request->request->get('category')['name'])));
                $em->persist($kategorija);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_categories_list');
            }
        }
        return $this->render('admin_category/dodaj.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/obrisi-kategoriju/{id}", name="app_admin_delete_category", defaults={"id": 0})
     */
    public function deleteCategory(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Kategorija::class)->find($id);
        $category->setShowCategory(0);
        $category->setActive(0);
        $em->persist($category);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali kategoriju!'
        );
        return $this->redirectToRoute('app_admin_categories_list');

    }

    /**
     * @Route("/admin/vidi-kategoriju/{id}", name="app_admin_view_category", defaults={"id": 0})
     */
    public function viewCategory(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Kategorija::class)->find($id);
        return $this->render('admin_category/kategorija.html.twig', [
            'kategorija' => $category,
        ]);
    }
}
