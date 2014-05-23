<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Salma\SymCartBundle\Model\ShoppingCart as Cart;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Salma\SymCartBundle\Entity\Orders;
use Salma\SymCartBundle\Entity\orderProducts;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CartController extends Controller {

    /**
     * indexAction() - display the cart of the user 
     *
     */
    public function indexAction() {
        $user = $this->getUser();
        if (!is_object($user)) {// check if user login in or not
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session); // shopping cart object

        $em = $this->getDoctrine()->getManager();
        $cartItems = $cart->getItems(); // cart items
        $show_cart = array();
        if ($cartItems) {
            foreach ($cartItems as $key => $value) {

                $db_item = $em->getRepository('SalmaSymCartBundle:Product')->find($key);

                $show_cart[] = array(
                    'id' => $key,
                    'name' => $db_item->getName(),
                    'price' => $value['unit_price'],
                    'subtotal' => $value['unit_price'] * $value['quantity'],
                    'quantity' => $value['quantity']
                );
            }
        }
        return $this->render('SalmaSymCartBundle:Cart:cart.html.twig', array('items' => $show_cart, 'total' => $cart->getTotal()));
    }
    //=========================================================//
    public function addAction($id, $offer = 0, $quantity = 1) {

        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session);
        $cart_item = $cart->getItems();

        if (!$session) {

            $session = new Session();
            $session->start();
        }

        $em = $this->getDoctrine()->getManager();
        if (!$offer) {
            $db_item = $em->getRepository('SalmaSymCartBundle:Product')->find($id);

            $cart_item[$id] = array(
                'quantity' => $quantity,
                'unit_price' => $db_item->getPrice()
            );
        } else {
            $db_item = $em->getRepository('SalmaSymCartBundle:Offer')->find($id);

            $cart_item[$db_item->getProduct()->getId()] = array(
                'quantity' => $quantity,
                'unit_price' => $db_item->getDiscount()
            );
        }
        $cart->setItems($cart_item);
        $cart->save($session);
        return new Response("success");
    }
    //=========================================================//
    public function checkoutAction() {
        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session);

        $user = $this->getUser();

        $order = new Orders();
        $order->setUserId($user);
        $order->setTotal($cart->getTotal());

        $em = $this->getDoctrine()->getManager();
        $em->persist($order);
        $em->flush();


        foreach ($cart->getItems() as $key => $value) {

            $orderProducts = new orderProducts();
            $product = $em->getRepository('SalmaSymCartBundle:Product')->find($key);

            $orderProducts->setOrderId($order);
            $orderProducts->setProductId($product);
            $orderProducts->setQuantity($value['quantity']);
            $orderProducts->setSubtotal($cart->getSubtotal($key));
            $em->persist($orderProducts);
            $em->flush();
        }

        $cart->emptyCart($session);
        return $this->redirect($this->generateUrl('order_show', array('id' => $order->getId())));
    }
   //=========================================================//
    public function emptyAction() {
        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session);

        $cart->emptyCart($session);

        return $this->redirect($this->generateUrl('cart_index'));
    }
    //=========================================================//
    public function remvItemAction($id) {
        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session);
        $cart->remvItem($id);
        $cart->save($session);

        return $this->redirect($this->generateUrl('cart_index'));
    }
    //=========================================================//
    public function changeItemQuantityAction() {

        $session = $this->getRequest()->getSession();
        $cart = new Cart('shopping_cart', $session);

        $item_id = $this->getRequest()->get('item_id');
        $quantity = $this->getRequest()->get('quantity');

        $cart->changeItemQuantity($item_id, $quantity);
        $total = $cart->getTotal();
        $subtotal = $cart->getSubtotal($item_id);
        $cart->save($session);
        return new Response(json_encode(array('total' => $total, 'subtotal' => $subtotal)));
    }

}
