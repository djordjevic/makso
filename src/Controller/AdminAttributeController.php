<?php

namespace App\Controller;

use App\Entity\ProizvodAtributi;
use App\Form\AtributType;
use App\Service\UploadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAttributeController extends AbstractController {
    /**
     * @Route("/admin/lista-atributa", name="app_admin_attributes_list")
     */
    public function listAttributes(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $atributi = $em->getRepository(ProizvodAtributi::class)->findAll();
        return $this->render('admin_attributes/list.html.twig', [
            'atributi' => $atributi
        ]);
    }

    /**
     * @Route("/admin/novi-atribut/{id}", name="app_admin_new_attribute", defaults={"id": 0})
     */
    public function newAttribute(Request $request, ProizvodAtributi $atribut = null): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili atribut!';
        if (!$atribut) {
            $message = 'Uspešno ste dodali novi atribut!';
            $atribut = new ProizvodAtributi();
        }
        $form = $this->createForm(AtributType::class, $atribut, ['attr' => ['action' => $this->generateUrl('app_admin_new_attribute', ['id' => $atribut->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $atribut->setName(strtoupper(trim($request->request->get('atribut')['name'])));
                $em->persist($atribut);
                $em->flush();
                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_attributes_list');
            }
        }
        return $this->render('admin_attributes/dodaj.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/obrisi-atribut/{id}", name="app_admin_delete_attribute", defaults={"id": 0})
     */
    public function deleteAttribute(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $atribut = $em->getRepository(ProizvodAtributi::class)->find($id);
        $atribut->setActive(0);
        $em->persist($atribut);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali atribut!'
        );
        return $this->redirectToRoute('app_admin_attributes_list');

    }

    /**
     * @Route("/admin/vidi-atribut/{id}", name="app_admin_view_attribute", defaults={"id": 0})
     */
    public function viewAttribute(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $atribut = $em->getRepository(ProizvodAtributi::class)->find($id);
        return $this->render('admin_attributes/atribut.html.twig', [
            'atribut' => $atribut
        ]);
    }
}
