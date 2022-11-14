<?php

namespace App\Controller;

use App\Classes\Ucfirst;
use App\Entity\Order;
use App\Entity\User;
use App\Form\RegistrationFizickoType;
use App\Form\RegistrationGazdinstvoType;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AbstractController {
    /**
     * @Route("/admin/lista-firmi", name="app_admin_companies_list")
     */
    public function listFirme(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $companies = $em->getRepository(User::class)->findBy(['firmaIliFizickoLice' => 1, 'active' => 1]);

        return $this->render('admin_user/firme_list.html.twig', [
            'firme' => $companies,
        ]);
    }

    /**
     * @Route("/admin/lista-korisnika", name="app_admin_users_list")
     */
    public function listKorisnici(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findBy(['firmaIliFizickoLice' => 2, 'active' => 1]);
        return $this->render('admin_user/korisnici_list.html.twig', [
            'korisnici' => $users,
        ]);
    }

    /**
     * @Route("/admin/lista-gazdinstava", name="app_admin_gazdinstva_list")
     */
    public function listGazdinstva(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findBy(['firmaIliFizickoLice' => 4, 'active' => 1]);
        return $this->render('admin_user/gazdinstvo_list.html.twig', [
            'firme' => $users,
        ]);
    }

    /**
     * @Route("/admin/novi-korisnik/{id}", name="app_admin_new_user", defaults={"id": 0})
     */
    public function noviKorisnik(Request $request, User $user = null, UserPasswordHasherInterface $passwordHasher): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili korisnika!';
        if (!$user) {
            $message = 'Uspešno ste dodali novog korisnika!';
            $user = new User();
        }
        $form = $this->createForm(RegistrationFizickoType::class, $user, ['attr' => ['action' => $this->generateUrl('app_admin_new_user', ['id' => $user->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setFirstName(trim($request->request->get('registration_fizicko')['firstName']));
                $user->setLastName(trim($request->request->get('registration_fizicko')['lastName']));
                $user->setEmail(strtolower($request->request->get('registration_fizicko')['email']));
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $request->request->get('registration_fizicko')['password']['first']
                );
                $user->setPassword($hashedPassword);
                $user->setRoles(['ROLE_PROFIL']);
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_users_list');
            }
        }

        return $this->render('admin_user/dodaj_korisnika.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/nova-firma/{id}", name="app_admin_new_company", defaults={"id": 0})
     */
    public function novaFirma(Request $request, User $user = null, UserPasswordHasherInterface $passwordHasher): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili firmu!';
        if (!$user) {
            $message = 'Uspešno ste dodali novu firmu!';
            $user = new User();
        }
        $form = $this->createForm(RegistrationType::class, $user, ['attr' => ['action' => $this->generateUrl('app_admin_new_company', ['id' => $user->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setNazivFirme(mb_strtoupper(trim($request->request->get('registration')['nazivFirme'])));
                $user->setPib(trim($request->request->get('registration')['pib']));
                $user->setEmail(strtolower($request->request->get('registration')['email']));
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $request->request->get('registration')['password']['first']
                );
                $user->setPassword($hashedPassword);
                $user->setRoles(['ROLE_FIRMA']);
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_companies_list');
            }
        }
        return $this->render('admin_user/dodaj_firmu.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/novo-gazdinstvo/{id}", name="app_admin_new_gazdinstvo", defaults={"id": 0})
     */
    public function novoGazdinstvo(Request $request, User $user = null, UserPasswordHasherInterface $passwordHasher): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili gazdinstvo!';
        if (!$user) {
            $message = 'Uspešno ste dodali novo gazdinstvo!';
            $user = new User();
        }
        $form = $this->createForm(RegistrationGazdinstvoType::class, $user, ['attr' => ['action' => $this->generateUrl('app_admin_new_gazdinstvo', ['id' => $user->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setGazdinstvo(trim($request->request->get('registration_gazdinstvo')['gazdinstvo']));
                $user->setEmail(strtolower($request->request->get('registration_gazdinstvo')['email']));
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $request->request->get('registration_gazdinstvo')['password']['first']
                );
                $user->setPassword($hashedPassword);
                $user->setRoles(['ROLE_GAZDINSTVO']);
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_gazdinstva_list');
            }
        }
        return $this->render('admin_user/dodaj_gazdinstvo.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/obrisi-firmu/{id}", name="app_admin_delete_company", defaults={"id": 0})
     */
    public function deleteCompany(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $firma = $em->getRepository(User::class)->find($id);
        $firma->setActive(0);
        $em->persist($firma);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali firmu!'
        );
        return $this->redirectToRoute('app_admin_companies_list');

    }

    /**
     * @Route("/admin/obrisi-gazdinstvo/{id}", name="app_admin_delete_gazdinstvo")
     */
    public function deleteGazdinstvo(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $firma = $em->getRepository(User::class)->find($id);
        $firma->setActive(0);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali gazdinstvo!'
        );
        return $this->redirectToRoute('app_admin_gazdinstva_list');

    }

    /**
     * @Route("/admin/vidi-firmu/{id}", name="app_admin_view_company", defaults={"id": 0})
     */
    public function viewCompany(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $firma = $em->getRepository(User::class)->find($id);
        $orders = $em->getRepository(Order::class)->findBy(['member' => $id], ['id' => 'desc']);
        return $this->render('admin_user/firma.html.twig', [
            'firma' => $firma,
            'orders' => $orders
        ]);
    }

    /**
     * @Route("/admin/vidi-gazdinstvo/{id}", name="app_admin_view_gazdinstvo")
     */
    public function viewGazdinstvo(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $firma = $em->getRepository(User::class)->find($id);
        $orders = $em->getRepository(Order::class)->findBy(['member' => $id], ['id' => 'desc']);
        return $this->render('admin_user/gazdinstvo.html.twig', [
            'firma' => $firma,
            'orders' => $orders
        ]);
    }

    /**
     * @Route("/admin/obrisi-korisnika/{id}", name="app_admin_delete_user", defaults={"id": 0})
     */
    public function deleteUser(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $user->setActive(0);
        $em->persist($user);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali korisnika!'
        );
        return $this->redirectToRoute('app_admin_users_list');

    }

    /**
     * @Route("/admin/vidi-korisnika/{id}", name="app_admin_view_user", defaults={"id": 0})
     */
    public function viewUser(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $orders = $em->getRepository(Order::class)->findBy(['member' => $id], ['id' => 'desc']);
        return $this->render('admin_user/korisnik.html.twig', [
            'user' => $user,
            'orders' => $orders
        ]);
    }
}
