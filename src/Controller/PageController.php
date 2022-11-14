<?php

namespace App\Controller;

use App\Form\KontaktType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontakt(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        return $this->render('page/kontakt.html.twig');
    }
    /**
     * @Route("/kontakt/form/", name="kontakt_email")
     * @param Request $request
     * @return Response
     */
    public function contactForm(Request $request, MailerInterface $mailer): Response {

        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {

            $ime = $request->request->get('ime');
            $prezime = $request->request->get('prezime');
            $email = $request->request->get('email');
            $poruka = $request->request->get('poruka');

            $email = (new TemplatedEmail())
                ->from(new Address('kontakt@prikolica.rs', 'Poruka sa sajta'))
                ->to('kontakt@prikolica.rs')
                ->addTo($email)
                ->subject('Poruka od korisnika ' . $ime . ' ' . $prezime)
                ->text($poruka);

            $mailer->send($email);

            $this->addFlash(
                'success',
                'Uspešno ste poslali poruku!'
            );
            return $this->redirectToRoute('kontakt');

        }
        $this->addFlash(
            'error',
            'Došlo je do greške pri slanju poruke, pokušajte ponovo!'
        );
        return $this->render('page/kontakt.html.twig');
    }


    /**
     * @Route("/o-nama", name="o-nama")
     */
    public function oNama(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/o_nama.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/galerija", name="galerija")
     */
    public function galerija(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/galerija.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/nacini-dostave", name="nacini-dostave")
     */
    public function naciniDostave(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/dostava.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/nacini-placanja", name="nacini-placanja")
     */
    public function naciniPlacanja(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/placanje.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/uslovi-koriscenja", name="uslovi-koriscenja")
     */
    public function usloviKoriscenje(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/koriscenje.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/politika-privatnosti", name="politika-privatnosti")
     */
    public function politikaPrivatnosti(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/privatnost.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/reklamacije", name="reklamacije")
     */
    public function reklamacije(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/reklamacije.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/zastita-podatka", name="zastita-podataka")
     */
    public function zastitaPodataka(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        return $this->render('page/zastita.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
