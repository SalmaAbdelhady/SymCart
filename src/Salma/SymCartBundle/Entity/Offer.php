<?php

namespace Salma\SymCartBundle\Entity;

use Salma\SymCartBundle\Entity\Product as Product;

/**
 * Offer
 */
class Offer {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $discount;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var array
     */
    private $status;

    /**
     * @var \Salma\SymCartBundle\Entity\Product
     */
    private $product;

    function __construct() {

        $this->startDate = new \DateTime("now");
        $this->endDate = new \DateTime("now +1");
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set discount
     *
     * @param string $discount
     * @return Offer
     */
    public function setDiscount($discount) {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string 
     */
    public function getDiscount() {
        return $this->discount;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Offer
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Offer
     */
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param array $status
     * @return Offer
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return array 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set product
     *
     * @param \Salma\SymCartBundle\Entity\Product $product
     * @return Offer
     */
    public function setProduct(\Salma\SymCartBundle\Entity\Product $product = null) {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Salma\SymCartBundle\Entity\Product 
     */
    public function getProduct() {
        return $this->product;
    }

}
