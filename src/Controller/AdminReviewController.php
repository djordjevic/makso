<?php

namespace App\Controller;

use App\Entity\KomentarProizvoda;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminReviewController extends AbstractController {
    /**
     * @Route("/admin/lista-ocena", name="app_admin_review_list")
     */
    public function listComments(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository(KomentarProizvoda::class)->findBy([], ['id' => 'desc']);

        return $this->render('admin_review/list.html.twig', [
            'comments' => $comments,
        ]);
    }


//    /**
//     * @Route("/admin/nova-kategorija/{id}", name="app_admin_new_category", defaults={"id": 0})
//     */
//    public function newCategory(Request $request, Kategorija $kategorija = null): Response {
//        $em = $this->getDoctrine()->getManager();
//        $message = 'Uspešno ste izmenili kategoriju!';
//        if (!$kategorija) {
//            $message = 'Uspešno ste dodali novu katagoriju!';
//            $kategorija = new Kategorija();
//        }
//        $form = $this->createForm(CategoryType::class, $kategorija, ['attr' => ['action' => $this->generateUrl('app_admin_new_category', ['id' => $kategorija->getId()])]]);
//        if ($request->isMethod('POST')) {
//            $form->handleRequest($request);
//            if ($form->isSubmitted() && $form->isValid()) {
//                $kategorija->setName(strtoupper(trim($request->request->get('category')['name'])));
//                $em->persist($kategorija);
//                $em->flush();
//
//                $this->addFlash(
//                    'notice',
//                    $message
//                );
//
//                return $this->redirectToRoute('app_admin_categories_list');
//            }
//        }
//        return $this->render('admin_category/dodaj.html.twig', [
//            'form' => $form->createView()
//        ]);
//    }
//
    /**
     * @Route("/admin/status-komentara/{id}", name="app_admin_status_review", defaults={"id": 0})
     */
    public function deleteReview(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $review = $em->getRepository(KomentarProizvoda::class)->find($id);
        if ($review->getActive() == 1) {
            $review->setActive(0);
        } else {
            $review->setActive(1);
        }

        $em->persist($review);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste izmenili dozvolu za prikaz komentara!'
        );
        return $this->redirectToRoute('app_admin_review_list');

    }

    /**
     * @Route("/admin/vidi-komentar/{id}", name="app_admin_view_review", defaults={"id": 0})
     */
    public function viewReview(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository(KomentarProizvoda::class)->find($id);
        return $this->render('admin_review/review.html.twig', [
            'comment' => $comment,
        ]);
    }
}
