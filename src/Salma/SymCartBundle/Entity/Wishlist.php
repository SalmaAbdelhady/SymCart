<?php

namespace Salma\SymCartBundle\Entity;

use Salma\SymCartBundle\Model\Cart as Cart;
/**
 * Wishlist
 */
class Wishlist extends Cart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user_id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set user_id
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userId
     * @return Wishlist
     */
    public function setUserId(\Application\Sonata\UserBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Add product
     *
     * @param \Salma\SymCartBundle\Entity\Product $product
     * @return Wishlist
     */
    public function addProduct(\Salma\SymCartBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \Salma\SymCartBundle\Entity\Product $product
     */
    public function removeProduct(\Salma\SymCartBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
