<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderProducts;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminOrderController extends AbstractController {
    /**
     * @Route("/admin/lista-porudzbina", name="app_admin_orders_list")
     */
    public function listOrders(): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository(Order::class)->findBy([], ['id' => 'desc']);

        return $this->render('admin_order/list.html.twig', [
            'porudzbine' => $orders,
        ]);
    }
    /**
     * @Route("/admin/pregled-porudzbine/{id}", name="app_admin_order_view", defaults={"id": 0})
     */
    public function viewOrder(Request $request, int $id): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);
        $orderProducts = $em->getRepository(OrderProducts::class)->findBy(['order' => $id]);

        return $this->render('admin_order/order.html.twig', [
            'order' => $order,
            'orderProducts' => $orderProducts,
        ]);
    }

    /**
     * @Route("/admin/print/pregled-porudzbine/{id}", name="app_admin_order_view_pdf")
     * @param Int $id
     * @param Pdf $pdf
     * @param Request $request
     * @return PdfResponse
     */
    public function viewOrderPdf(int $id, Pdf $pdf, Request $request) {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);
        $orderProducts = $em->getRepository(OrderProducts::class)->findBy(['order' => $id]);

        $fileName = 'Porudzbina_#' . $id .'pdf';

        $html = $this->renderView('admin_order/invoice_pdf.html.twig', [
            'order' => $order,
            'orderProducts' => $orderProducts,
        ]);

        return new PdfResponse($pdf->getOutputFromHtml($html), $fileName);

    }

    /**
     * @Route("/admin/izmeni-status-porudzbine/{id}", name="app_admin_change_status", defaults={"id": 0})
     */
    public function statusOrder(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $status = $request->get('status');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);

        $order->setOrderStatus($status);

        $em->persist($order);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste izmenili status porudžbine!'
        );
        return $this->redirectToRoute('app_admin_orders_list');

    }

    /**
     * @Route("/admin/obrisi-porudzbinu/{id}", name="app_admin_delete_order", defaults={"id": 0})
     */
    public function deleteOrder(Request $request): Response {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('app_login'));
        }
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);
        $order->setOrderStatus(3);
        $em->persist($order);
        $em->flush();

        $this->addFlash(
            'warning',
            'Uspešno ste obrisali porudžbinu!'
        );
        return $this->redirectToRoute('app_admin_orders_list');

    }

}
