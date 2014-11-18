<?php

namespace Salma\SymCartBundle\Model;

use Salma\SymCartBundle\Model\Cart as Cart;

/**
 * ShoppingCart
 */
class ShoppingCart extends Cart {



    
    private $total = 0.00;

    /**
     * __construct() - Constructor. This assigns the name of the cart
     *                 to an instance variable and loads the cart from
     *                 session.
     *
     * @param string $name The name of the cart.
     * @param \Symfony\Component\HttpFoundation\Session\SessionInterface $session
     */
    function __construct($name, $session) {


        $this->name = $name;
        $this->items = $session->get($this->name);
    }

    /**
     * Get subtotal
     *
     * @return float 
     */
    public function getSubtotal($itemId) {

        $this->items[$itemId]['subtotal'] = $this->items[$itemId]['quantity'] *
                $this->items[$itemId]['unit_price'];

        return  $this->items[$itemId]['subtotal'];
    }

    /**
     * Get total
     *
     * @return double 
     */
    public function getTotal() {

        if ($this->items) {
            foreach ($this->items as $key => $value) {
                $this->total += $value['quantity'] * $value['unit_price'];
            }
        } else {
            $this->total = 0.00;
        }
        return $this->total;
    }

  

    /**
     * changeItemQuantity() - change the quantity of specific item
     * @param $itemId 
     * @param $quantity - the new quantity
     * 
     */
    public function changeItemQuantity($itemId, $quantity) {

        $this->items[$itemId]['quantity'] = $quantity;
    }

}
