<?php

namespace App\Controller;

use App\Entity\Kategorija;
use App\Entity\Proizvod;
use App\Entity\ProizvodStatistika;
use DateTime;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;


class HomeController extends AbstractController {
    /**
     * @Route("/", name="pocetna")
     */
    public function index(): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_admin'));
        }
        $em = $this->getDoctrine()->getManager();
        $randomProducts = $em->getRepository(Proizvod::class)->findAll();
        shuffle($randomProducts);

        $top = $em->getRepository(ProizvodStatistika::class)->findBy([], ['visits' => 'DESC'], 2);
        return $this->render('home/index.html.twig', [
            'randomProducts' => $randomProducts,
            'top' => $top
        ]);
    }

    public function kategorije(): Response {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Kategorija::class)->findBy(['active' => 1]);

        return $this->render('include/kat.html.twig', ['categories' => $categories]);
    }
}
