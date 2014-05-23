<?php

namespace Salma\SymCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Salma\SymCartBundle\Model\Item as Item;
use \Salma\SymCartBundle\Entity\Section as Section;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Product
 */
class Product {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $features;

    /**
     * @var string
     */
    private $specifications;

    /**
     * @var array
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $model;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \Salma\SymCartBundle\Entity\Section
     */
    private $section_id;

    /**
     * @var \Salma\SymCartBundle\Entity\Offer
     */
    private $offer;

    /**
     * @var string
     */
    private $ext;
    private $image;

    function __construct() {

        $this->date = new \DateTime("now");
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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set features
     *
     * @param string $features
     * @return Product
     */
    public function setFeatures($features) {
        $this->features = $features;

        return $this;
    }

    /**
     * Get features
     *
     * @return string 
     */
    public function getFeatures() {
        return $this->features;
    }

    /**
     * Set specifications
     *
     * @param string $specifications
     * @return Product
     */
    public function setSpecifications($specifications) {
        $this->specifications = $specifications;

        return $this;
    }

    /**
     * Get specifications
     *
     * @return string 
     */
    public function getSpecifications() {
        return $this->specifications;
    }

    /**
     * Set status
     *
     * @param array $status
     * @return Product
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
     * Set date
     *
     * @param \DateTime $date
     * @return Product
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Product
     */
    public function setModel($model) {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Set section_id
     *
     * @param \Salma\SymCartBundle\Entity\Section $sectionId
     * @return Product
     */
    public function setSectionId(Section $sectionId = null) {
        $this->section_id = $sectionId;

        return $this;
    }

    /**
     * Get section_id
     *
     * @return \Salma\SymCartBundle\Entity\Section 
     */
    public function getSectionId() {
        return $this->section_id;
    }

    public function __toString() {
        return $this->name;
    }

    /**
     * Set ext
     *
     * @param string $ext
     * @return Product
     */
    public function setExt($ext) {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string 
     */
    public function getExt() {
        return $this->ext;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Section
     */
    public function setImage(UploadedFile $image = null) {
        $this->image = $image;
        if ($this->image) {
            $this->ext = $this->getImage()->guessExtension();
        }
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->getImage()) {
            $this->ext = $this->getImage()->guessExtension();
        }
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/products';
    }

    public function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return 'bundles/salmasymcart/images' . $this->getUploadDir();
    }

    public function getWebPath() {
        return null === $this->ext ? null : $this->getUploadDir() . '/' . $this->ext;
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->getImage()) {
            return;
        }

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->temp);
            // clear the temp image path
            $this->temp = null;
        }

        // you must throw an exception here if the file cannot be moved
        // so that the entity is not persisted to the database
        // which the UploadedFile move() method does
        $this->getImage()->move(
                $this->getUploadRootDir(), $this->id . '.' . $this->getImage()->guessExtension()
        );
    }

    public function getFileName() {
        return $this->getId() . '.' . $this->getExt();
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
        $this->temp = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if (isset($this->temp)) {
            unlink($this->temp);
        }
    }

    public function getAbsolutePath() {
        return $this->getUploadRootDir() . '/' . $this->id . '.' . $this->ext;
    }

    /**
     * Set offer
     *
     * @param \Salma\SymCartBundle\Entity\Offer $offer
     * @return Product
     */
    public function setOffer(\Salma\SymCartBundle\Entity\Offer $offer = null) {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return \Salma\SymCartBundle\Entity\Offer 
     */
    public function getOffer() {
        return $this->offer;
    }

}
