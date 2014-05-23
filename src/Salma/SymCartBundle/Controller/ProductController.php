<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller {

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('SalmaSymCartBundle:Product')->findOneBy(array(
            'id' => $id,
            'status' => 'visible'));

        $offer = $em->getRepository('SalmaSymCartBundle:Offer')->getCurrentOfferForProduct($product);

        if ($offer and sizeof($offer)==1) {
            return $this->redirect($this->generateUrl('offer_show', array('id' => $offer[0]->getId())));
        }
        return $this->render('SalmaSymCartBundle:Product:show.html.twig', array('item' => $product));
    }

}
