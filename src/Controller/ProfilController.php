<?php

namespace App\Controller;

use App\Classes\Ucfirst;
use App\Entity\Order;
use App\Entity\OrderProducts;
use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ProfilType;
use App\Form\RegistrationFizickoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {
    /**
     * @Route("/profil", name="app_profil")
     */
    public function index(): Response {
        if (!$this->isGranted('ROLE_PROFIL')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $orders = $em->getRepository(Order::class)->findBy(['member' => $user->getId()], ['id' => 'desc']);
        $ordersCount = $em->getRepository(Order::class)->count(['member' => $user->getId()]);

        return $this->render('profil/index.html.twig', [
            'user' => $this->getUser(),
            'porudzbine' => $orders,
            'count' => $ordersCount

        ]);
    }

    /**
     * @Route("/profil/pregled-porudzbine/{id}", name="app_profil_order_view", defaults={"id": 0})
     */
    public function viewProfilOrder(Request $request, int $id): Response {
        if (!$this->isGranted('ROLE_PROFIL')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);
        $orderProducts = $em->getRepository(OrderProducts::class)->findBy(['order' => $id]);

        return $this->render('profil/order.html.twig', [
            'order' => $order,
            'orderProducts' => $orderProducts,
        ]);
    }

    /**
     * @Route("/profil/izmeni/", name="app_profil_edit")
     */
    public function editUser(Request $request): Response {
        if (!$this->isGranted('ROLE_PROFIL')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $message = 'Uspešno ste izmenili podatke!';

        $form = $this->createForm(ProfilType::class, $user, ['attr' => ['action' => $this->generateUrl('app_profil_edit')]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setFirstName(trim($request->request->get('profil')['firstName']));
                $user->setLastName(trim($request->request->get('profil')['lastName']));
                $user->setEmail(strtolower($request->request->get('profil')['email']));
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_profil');
            }
        }

        return $this->render('profil/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/profil/izmeni-lozinku/", name="app_profil_edit_password")
     */
    public function editPassword(Request $request, UserPasswordHasherInterface $passwordHasher): Response {
        if (!$this->isGranted('ROLE_PROFIL')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $message = 'Uspešno ste izmenili lozinku!';

        $form = $this->createForm(ChangePasswordFormType::class, $user, ['attr' => ['action' => $this->generateUrl('app_profil_edit_password')]]);
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

                return $this->redirectToRoute('app_profil');
            }
        }

        return $this->render('profil/edit_password.html.twig', [
            'resetForm' => $form->createView()
        ]);
    }
}
