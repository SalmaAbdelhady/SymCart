<?php

namespace Salma\SymCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Section
 */
class Section {

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
    private $description;

    /**
     * @var string
     */
    private $image;
    private $ext;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Section
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
     * Set description
     *
     * @param string $description
     * @return Section
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param UploadedFile $image
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
        return '/sections';
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
     * Set ext
     *
     * @param string $ext
     * @return Section
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

}
