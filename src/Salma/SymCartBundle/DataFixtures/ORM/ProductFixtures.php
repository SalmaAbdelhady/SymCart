<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductFixtures
 *
 * @author Salma
 */

namespace Salma\SymCartBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Salma\SymCartBundle\Entity\Product;

class ProductFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $product1 = new Product();
        $product1->setName('Lonovo IdeaPad Z510');
        $product1->setExt('jpeg');
        $product1->setModel('Z510');
        $product1->setPrice(798.99);
        $product1->setQuantity(10);
        $product1->setStatus('visible');
        $product1->setSectionId($manager->merge($this->getReference('section-1')));
        $product1->setFeatures('i7-4702MQ/ 8G/ 1 TB HDD + 8 GB SSD/ nVidia 2GB/ Win8/ Dark Chocolate');
        $product1->setSpecifications('Lenovo Laptops
                The Lenovo® Z510 notebook uniquely combines good processor and graphics performance with features
                like an integrated optical drive and superior audio
                quality, making it ideal for everyday multimedia applications.

                NVIDIA® GeForce® Graphics

                Robust performance for your HD videos and photo editing, 
                smooth movie playback, and the fun of 3D gaming with NVIDIA® GeForce® GT740M 2GB graphics.');
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Dell Inspiron 15-3521');
        $product2->setExt('jpeg');
        $product2->setModel('Inspiron 15-3521');
        $product2->setPrice(678.99);
        $product2->setQuantity(100);
        $product2->setStatus('visible');
        $product2->setSectionId($manager->merge($this->getReference('section-1')));
        $product2->setFeatures('i3-3217U/ 4G/ 500G/ AMD Radeon 1G/ Ubuntu - Dell');
        $product2->setSpecifications('Big on features, not on price.
                    Manage daily tasks with the affordable Inspiron™ 15 — a 39.6 cm (15.6") laptop with Intel® Core™ processor and a thin design.
                    Thin and stylish
                    Starting at about 2.54 cm (1") thin, the Inspiron 15 is sleek and portable. And,
                    its quilted lid and palmrest design makes it as stylish as it is mobile. 
                    Built-in entertainment
                    Never be without your digital entertainment.
                    The Inspiron 15 is equipped with a DVD Optical Drive and a hard drive to store your music, movies and pictures.');

        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName('HP ProBook 450 G1');
        $product3->setExt('jpeg');
        $product3->setModel('450 G1 F7X40EA');
        $product3->setPrice(478.99);
        $product3->setQuantity(89);
        $product3->setStatus('visible');
        $product3->setSectionId($manager->merge($this->getReference('section-1')));
        $product3->setFeatures('Intel® Core™ i5-4200M Processor (3M Cache, up to 3.10 GHz)');
        $product3->setSpecifications('
                                    SKU: MT_1100020008
                                    Shipping Weight: 5.00 Kg
                                    Processor : Intel® Core™ i5-4200M Processor (3M Cache, up to 3.10 GHz)
                                    Screen : 15.6"
                                    Graphics : Dedicated 2 GB
                                    Memory : 6 GB DDR3
                                    Hard Disk : 1 TB HDD
                                    Optical Drive : DVD+/-RW SuperMulti DL
                                    Bluetooth : Yes
                                    Fingerprint Reader : No
                                    Wireless : Yes
                                    Camera : Yes
                                    Operating System : DOS
                                    Battery : 6 Cell
                                    Weight : 2.26 kg
                                    Carrying Case : No
                                    Additional Features : 	
                                    Warranty : 	1 Year');

        $manager->persist($product3);

        $product4 = new Product();
        $product4->setName('Monochrome Laser');
        $product4->setExt('jpeg');
        $product4->setModel('HL-5340D - brother');
        $product4->setPrice(478.99);
        $product4->setQuantity(189);
        $product4->setStatus('visible');
        $product4->setSectionId($manager->merge($this->getReference('section-1')));
        $product4->setFeatures('Print quality (Up to) : 1,200dpi, 2,400 x 600dpi (HQ1,200), 600dpi, 300dpi
                Print speed (Up to) : Up to 30ppm (A4)');
        $product4->setSpecifications('
                                    The perfect office companion for double-sided and heavy duty printing.

                                    Meet the heavy printing demands of your office with HL-5340D. This high-speed mono laser printer comes with an automatic 2-side printing feature, and has been designed to produce an impressive output of 30ppm.
                            ');

        $manager->persist($product4);


        $product5 = new Product();
        $product5->setName('Officejet 6700 Premium');
        $product5->setExt('jpeg');
        $product5->setModel(' CN583A - HP');
        $product5->setPrice(978.00);
        $product5->setQuantity(18);
        $product5->setStatus('visible');
        $product5->setSectionId($manager->merge($this->getReference('section-1')));
        $product5->setFeatures('Print quality (Up to) : 	Color : Up to 4800 x 1200, Black : Up to 600 x 1200 dpi
Print speed (Up to) : 	Print speed black : ISO Up to 16 ppm, Print speed color : ISO Up to 9 ppm ');
        $product5->setSpecifications('
                                    Get professional, two-sided colour printing for a low cost per page with this high productivity e-all-in-one. Use the touchscreen to scan, copy, fax, access apps1 and more. Print on the go or via your wired or wireless network.

                        The HP Officejet 6700 Premium e-All-in-One is designed for micro/small business users looking for an e-all-in-one capable of printing professional, affordable two-sided colour via a wired or wireless network, or direct from mobile devices.');

        $manager->persist($product5);

        $product6 = new Product();
        $product6->setName('Satellite U40t-A601');
        $product6->setExt('jpeg');
        $product6->setModel('Toshiba U40t-A601 ');
        $product6->setPrice(888.00);
        $product6->setQuantity(0);
        $product6->setStatus('visible');
        $product6->setSectionId($manager->merge($this->getReference('section-1')));
        $product6->setFeatures('Touch Screen Laptop i5-4200M/ 8G/ 1TB/ nVidia 2GB/ Win8/ Silver');
        $product6->setSpecifications('
                                Business value on the go.

                                Bring peace of mind and style to your everyday tasks. Whether you’re sending an email, sharing photos, online banking, or listening to music.

                                Store it all.');
        $manager->persist($product6);
        
        $product7 = new Product();
        $product7->setName('iPhone 5s 16GB');
        $product7->setExt('jpeg');
        $product7->setModel('5s');
        $product7->setPrice(599.80);
        $product7->setQuantity(0);
        $product7->setStatus('visible');
        $product7->setSectionId($manager->merge($this->getReference('section-2')));
        $product7->setFeatures('Display : 	Retina display, 4-inch (diagonal) widescreen Multi-Touch display, 1136-by-640-pixel resolution at 326 ppi, 800:1 contrast ratio (typical), 500 cd/m2 max brightness (typical), Fingerprint-resistant oleophobic coating on front, Support for display of multiple languages and characters simultaneously ');
        $product7->setSpecifications('
                                A chip with 64-bit architecture. A fingerprint identity sensor. A better, faster camera. And an operating system built specifically for 64-bit. Any one of these features in a smartphone would make it ahead of its time. All of these features in a smartphone make it an iPhone that’s definitely ahead of its time. ');
        $manager->persist($product7);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 3; // the order in which fixtures will be loaded
    }

}
