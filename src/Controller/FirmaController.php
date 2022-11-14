<?php

namespace App\Controller;

use App\Classes\Ucfirst;
use App\Entity\Order;
use App\Entity\OrderProducts;
use App\Form\ChangePasswordFormType;
use App\Form\FirmaType;
use App\Form\ProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class FirmaController extends AbstractController {

    /**
     * @Route("/firma", name="app_firma")
     */
    public function index(): Response {
        if (!$this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $orders = $em->getRepository(Order::class)->findBy(['member' => $user->getId()], ['id' => 'desc']);
        $ordersCount = $em->getRepository(Order::class)->count(['member' => $user->getId()]);

        return $this->render('firma/index.html.twig', [
            'user' => $this->getUser(),
            'porudzbine' => $orders,
            'count' => $ordersCount

        ]);
    }

    /**
     * @Route("/firma/pregled-porudzbine/{id}", name="app_firma_order_view", defaults={"id": 0})
     */
    public function viewFirmaOrder(Request $request, int $id): Response {
        if (!$this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);
        $orderProducts = $em->getRepository(OrderProducts::class)->findBy(['order' => $id]);

        return $this->render('firma/order.html.twig', [
            'order' => $order,
            'orderProducts' => $orderProducts,
        ]);
    }

    /**
     * @Route("/firma/izmeni/", name="app_firma_edit")
     */
    public function editFirma(Request $request): Response {
        if (!$this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $message = 'Uspešno ste izmenili podatke!';

        $form = $this->createForm(FirmaType::class, $user, ['attr' => ['action' => $this->generateUrl('app_firma_edit')]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setNazivFirme(mb_strtoupper(trim($request->request->get('firma')['nazivFirme'])));
                $user->setPib(trim($request->request->get('firma')['pib']));
                $user->setEmail(strtolower($request->request->get('firma')['email']));
                $user->setFirstName(trim($request->request->get('firma')['firstName']));
                $user->setLastName(trim($request->request->get('firma')['lastName']));
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_firma');
            }
        }

        return $this->render('firma/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/firma/izmeni-lozinku/", name="app_firma_edit_password")
     */
    public function editPassword(Request $request, UserPasswordHasherInterface $passwordHasher): Response {
        if (!$this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $message = 'Uspešno ste izmenili lozinku!';

        $form = $this->createForm(ChangePasswordFormType::class, $user, ['attr' => ['action' => $this->generateUrl('app_firma_edit_password')]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $request->request->get('change_password_form')['plainPassword']['first']
                );
                $user->setPassword($hashedPassword);
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_firma');
            }
        }

        return $this->render('firma/edit_password.html.twig', [
            'resetForm' => $form->createView()
        ]);
    }
}
