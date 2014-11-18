<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Salma
 */

namespace Salma\SymCartBundle\Model;

abstract class Cart {

//put your code here

    protected $name;
    protected $items;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {

        $this->name = $name;
        return $this;
    }

    /**
     * save() - Saves the cart to a session variable.
     * @param \Symfony\Component\HttpFoundation\Session\SessionInterface $session
     */
    public function save($session) {
        $session->set($this->name, $this->items);
    }

    /**
     * emptycart() - empty the cart contents.
     * @param \Symfony\Component\HttpFoundation\Session\SessionInterface $session
     */
    public function emptyCart($session) {
        $session->set($this->name, array());
    }

    /**
     * hasItems() - Checks to see if there are items in the cart.
     *
     * @return bool True if there are items.
     */
    public function hasItems() {
        return (bool) $this->Items;
    }

    /**
     * remvItem() - Remove an item.
     *
     * @param string $itemId The order code of the item.
     */
    public function remvItem($itemId) {
        unset($this->items[$itemId]);
    }

    /**
     * Get items
     *
     * @return array 
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Set cart items
     *
     * @param array of items
     * @return ShoppingCart
     */
    public function setItems($items = array()) {
        $this->items = $items;
        return $this;
    }

}

?>