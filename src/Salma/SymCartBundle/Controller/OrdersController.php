<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OrdersController extends Controller {

    /**
     * Finds and displays a user orders
     * 
     */
    public function listAction() {
        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository('SalmaSymCartBundle:Orders')->findBy(
                array('user_id' => $user->getId()));

        return $this->render('SalmaSymCartBundle:Orders:list.html.twig', array('orders' => $orders));
    }

    /**
     * Finds and displays orders products.
     * 
     */
    public function showAction($id) 
      {
        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('SalmaSymCartBundle:orderProducts')->getProductsForOrder($id);
        if (!$products) {
            throw $this->createNotFoundException('Unable to find Section entity.');
        }

        $order = $em->getRepository('SalmaSymCartBundle:Orders')->findOneBy(array('id' => $id));

        return $this->render('SalmaSymCartBundle:Orders:show.html.twig', array(
                    'items' => $products,
                    'order' => $order
        ));
    }

}
