<?php

namespace App\Controller;

use App\Classes\Ucfirst;
use App\Entity\User;
use App\Form\RegistrationFizickoType;
use App\Form\RegistrationGazdinstvoType;
use App\Form\RegistrationType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registracija", name="izbor_registracije")
     */
    public function registrationModel(): Response {
        if ($this->isGranted('ROLE_PROFIL') or $this->isGranted('ROLE_ADMIN') or $this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        return $this->render('registration/pick_reg_model.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/registracija-gazdinstvo", name="reg_gazdinstvo")
     */
    public function registrationGazdinstvo(Request $request, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer): Response {
        if ($this->isGranted('ROLE_PROFIL') or $this->isGranted('ROLE_ADMIN') or $this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RegistrationGazdinstvoType::class, $user);
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

                $email = (new TemplatedEmail())
                    ->from(new Address('registracija@prikolica.rs', 'Registracija'))
                    ->to($user->getEmail())
                    ->subject('Registracija')
                    ->htmlTemplate('registration/welcome.html.twig');

                $mailer->send($email);

                return $this->render('registration/registration_confirmation.html.twig');
            }
        }

        return $this->render('registration/gazdinstvo.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/registracija-pravno-lice", name="reg_firma")
     */
    public function registrationFirma(Request $request, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer): Response {
        if ($this->isGranted('ROLE_PROFIL') or $this->isGranted('ROLE_ADMIN') or $this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
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

                $email = (new TemplatedEmail())
                    ->from(new Address('registracija@prikolica.rs', 'Registracija'))
                    ->to($user->getEmail())
                    ->subject('Registracija')
                    ->htmlTemplate('registration/welcome.html.twig');

                $mailer->send($email);

                return $this->render('registration/registration_confirmation.html.twig');
            }
        }

        return $this->render('registration/pravno_lice.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/registracija-fizicko-lice", name="reg_fizicko")
     */
    public function registrationFizicko(Request $request, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer): Response {
        if ($this->isGranted('ROLE_PROFIL') or $this->isGranted('ROLE_ADMIN') or $this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RegistrationFizickoType::class, $user);
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

                $proba = $user->getEmail();

                $email = (new TemplatedEmail())
                    ->from(new Address('registracija@prikolica.rs', 'Registracija'))
                    ->to($user->getEmail())
                    ->subject('Registracija')
                    ->htmlTemplate('registration/welcome.html.twig')
                    ->context([
                        'proba' => $proba,
                    ]);

                $mailer->send($email);

                return $this->render('registration/registration_confirmation.html.twig');
            }
        }

        return $this->render('registration/fizicko_lice.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
