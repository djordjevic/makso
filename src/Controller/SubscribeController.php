<?php

namespace App\Controller;

use App\Entity\Subscribe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscribeController extends AbstractController {
    /**
     * @Route("/subscribe", name="app_subscribe")
     */
    public function index(Request $request): Response {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $emailTrue = $em->getRepository(Subscribe::class)->findBy(['email' => $email]);
            if (empty($emailTrue)) {
                $sub = new Subscribe();
                $sub->setEmail($email);
                $em->getRepository(Subscribe::class)->addSub($sub);
                return $this->redirectToRoute('pocetna');
            } else {
                return $this->redirectToRoute('pocetna');
            }
        } else {
            return $this->redirectToRoute('pocetna');
        }

    }
}
