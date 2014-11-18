<?php

namespace Salma\SymCartBundle\Entity;

/**
 * Orders
 */
class Orders {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $orderNum;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $total;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user_id;

    /**
     * Constructor
     */
    public function __construct() {

        $this->status = 'Pending';
        $this->createdAt = new \DateTime("now");
        $this->orderNum = rand(1000, 100000);
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
     * Set orderNum
     *
     * @param integer $orderNum
     * @return Orders
     */
    public function setOrderNum($orderNum) {
        $this->orderNum = $orderNum;

        return $this;
    }

    /**
     * Get orderNum
     *
     * @return integer 
     */
    public function getOrderNum() {
        return $this->orderNum;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Orders
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Orders
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Orders
     */
    public function setTotal($total) {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Set user_id
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userId
     * @return Orders
     */
    public function setUserId(\Application\Sonata\UserBundle\Entity\User $userId = null) {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $join_id;


    /**
     * Add join_id
     *
     * @param \Salma\SymCartBundle\Entity\orderProducts $joinId
     * @return Orders
     */
    public function addJoinId(\Salma\SymCartBundle\Entity\orderProducts $joinId)
    {
        $this->join_id[] = $joinId;

        return $this;
    }

    /**
     * Remove join_id
     *
     * @param \Salma\SymCartBundle\Entity\orderProducts $joinId
     */
    public function removeJoinId(\Salma\SymCartBundle\Entity\orderProducts $joinId)
    {
        $this->join_id->removeElement($joinId);
    }

    /**
     * Get join_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJoinId()
    {
        return $this->join_id;
    }
    
    
    public function __toString() {
        return '#'.$this->orderNum;
    }
}
