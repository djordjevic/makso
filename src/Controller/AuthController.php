<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    /**
     * @Route("/prijava", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->isGranted('ROLE_PROFIL') or $this->isGranted('ROLE_ADMIN') or $this->isGranted('ROLE_FIRMA')) {
            return $this->redirect($this->generateUrl('pocetna'));
        }
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
        $greska = '';
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error) {
            $greska = 'Email ili lozinka nisu validni! Pokušajte ponovo.';
        }
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $greska]);
    }

    /**
     * @Route("/odjava", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
