<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SectionFixtures
 *
 * @author Salma
 */

namespace Salma\SymCartBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Salma\SymCartBundle\Entity\Section;

class SectionFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $section1 = new Section();
        $section1->setName('Computer & Printers');
        $section1->setExt('jpeg');
        $section1->setDescription('All About Computers and printers.');
        $manager->persist($section1);

        $section2 = new Section();
        $section2->setName('Mobiles, Tablets & Ipads');
        $section2->setExt('jpeg');
        $section2->setDescription('All About Mobiles, Tablets & Ipads.');
        $manager->persist($section2);

        $section3 = new Section();
        $section3->setName('Fashion');
        $section3->setExt('jpeg');
        $section3->setDescription('Fashion .. Fashion .. Fashion.');
        $manager->persist($section3);

        $manager->flush();
        
        $this->addReference('section-1', $section1);
        $this->addReference('section-2', $section2);
        $this->addReference('section-3', $section3);
       
    }
    
       /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }


}
