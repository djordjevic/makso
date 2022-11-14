<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminActionController extends AbstractController {
    /**
     * @Route("/admin/lista-akcija", name="app_admin_actions_list")
     */
        public function listActions(): Response {
            if (!$this->isGranted('ROLE_ADMIN')) {
                return $this->redirect($this->generateUrl('app_login'));
            }
        return $this->render('admin_action/list.html.twig', [
            'controller_name' => 'AdminProductController',
        ]);
    }

    /**
     * @Route("/admin/nova-akcija", name="app_admin_new_action")
     */
        public function newAction(): Response {
            if (!$this->isGranted('ROLE_ADMIN')) {
                return $this->redirect($this->generateUrl('app_login'));
            }
        return $this->render('admin_action/dodaj.html.twig', [
            'controller_name' => 'AdminUserController',
        ]);
    }
}
