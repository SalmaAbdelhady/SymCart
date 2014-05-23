<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller {

    public function indexAction() {


        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('SalmaSymCartBundle:Product')->findBy(array('status'=>'visible'));
        return $this->render('SalmaSymCartBundle:Page:index.html.twig', array(
                    'products' => $products
        ));
        
        
    }

    public function aboutAction() {
        return $this->render('SalmaSymCartBundle:Page:about.html.twig');
    }

}
