<?php

namespace App\Controller;

use App\Entity\Dobavljac;
use App\Form\DobavljacType;
use App\Service\UploadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDobavljacController extends AbstractController {
    /**
     * @Route("/admin/lista-dobavljaca", name="app_admin_vendors_list")
     */
    public function listVendors(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $vendors = $em->getRepository(Dobavljac::class)->findAll();
        return $this->render('admin_dobavljac/list.html.twig', [
            'vendors' => $vendors
        ]);
    }

    /**
     * @Route("/admin/novi-dobavljac/{id}", name="app_admin_new_vendor", defaults={"id": 0})
     */
    public function newVendor(Request $request, Dobavljac $dobavljac = null, UploadService $uploadService): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $message = 'Uspešno ste izmenili dobavljača!';
        if (!$dobavljac) {
            $message = 'Uspešno ste dodali novog dobavljača!';
            $dobavljac = new Dobavljac();
        }
        $form = $this->createForm(DobavljacType::class, $dobavljac, ['attr' => ['action' => $this->generateUrl('app_admin_new_vendor', ['id' => $dobavljac->getId()])]]);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $dobavljac->setName(strtoupper(trim($request->request->get('dobavljac')['name'])));
                $file = $form->get('image')->getData();
                if ($file) {
                    $fileName = $uploadService->upload($file, 'dobavljaci/' . $dobavljac->getName() . '/');
                    $dobavljac->setImage('assets/images/dobavljaci/' . $dobavljac->getName() . '/' . $fileName);
                }
                $em->persist($dobavljac);
                $em->flush();
                $this->addFlash(
                    'notice',
                    $message
                );

                return $this->redirectToRoute('app_admin_vendors_list');
            }
        }
        return $this->render('admin_dobavljac/dodaj.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/obrisi-dobavljaca/{id}", name="app_admin_delete_vendor", defaults={"id": 0})
     */
    public function deleteVendor(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $vendor = $em->getRepository(Dobavljac::class)->find($id);
        $vendor->setActive(0);
        $em->persist($vendor);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali dobavljača!'
        );
        return $this->redirectToRoute('app_admin_vendors_list');

    }

    /**
     * @Route("/admin/vidi-dobavljaca/{id}", name="app_admin_view_vendor", defaults={"id": 0})
     */
    public function viewVendor(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $vendor = $em->getRepository(Dobavljac::class)->find($id);
        return $this->render('admin_dobavljac/dobavljac.html.twig', [
            'vendor' => $vendor
        ]);
    }
}
