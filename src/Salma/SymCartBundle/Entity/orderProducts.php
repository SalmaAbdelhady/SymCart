<?php

namespace Salma\SymCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * orderProducts
 */
class orderProducts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $subtotal;

    /**
     * @var \Salma\SymCartBundle\Entity\Product
     */
    private $product_id;

    /**
     * @var \Salma\SymCartBundle\Entity\Orders
     */
    private $order_id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return orderProducts
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return orderProducts
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set product_id
     *
     * @param \Salma\SymCartBundle\Entity\Product $productId
     * @return orderProducts
     */
    public function setProductId(\Salma\SymCartBundle\Entity\Product $productId = null)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get product_id
     *
     * @return \Salma\SymCartBundle\Entity\Product 
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set order_id
     *
     * @param \Salma\SymCartBundle\Entity\Orders $orderId
     * @return orderProducts
     */
    public function setOrderId(\Salma\SymCartBundle\Entity\Orders $orderId = null)
    {
        $this->order_id = $orderId;

        return $this;
    }

    /**
     * Get order_id
     *
     * @return \Salma\SymCartBundle\Entity\Orders 
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
}
