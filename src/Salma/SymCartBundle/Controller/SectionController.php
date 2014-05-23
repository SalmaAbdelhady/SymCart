<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SectionController extends Controller {
    
    /**
     * Finds and displays a Section entity.
     * and displays section products
     */
    public function showAction($id) {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SalmaSymCartBundle:Section')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Section entity.');
        } else {

            $products = $em->getRepository('SalmaSymCartBundle:Product')->getProductsForSection($id);
        }


        return $this->render('SalmaSymCartBundle:Section:show.html.twig', array(
                    'section' => $entity,
                    'products' => $products));
    }
     /**
     * Lists all Section entities.
     *
     */
    public function listAction() {
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SalmaSymCartBundle:Section')->findAll();

        return $this->render('SalmaSymCartBundle:Section:list.html.twig', array(
                    'sections' => $entities
        ));
    }
  /**
     * Lists all Section entities.
     *
     */
    public function sectionMenuAction() {
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SalmaSymCartBundle:Section')->findAll();

        return $this->render('SalmaSymCartBundle:Section:sections_dropdown.html.twig', array(
                    'sections' => $entities
        ));
    }
}
