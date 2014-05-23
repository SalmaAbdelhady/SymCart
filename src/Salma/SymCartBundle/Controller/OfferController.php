<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfferController extends Controller {

    public function listAction() {
        $em = $this->getDoctrine()->getManager();

        $offers = $em->getRepository('SalmaSymCartBundle:Offer')->getCurrentOffers();

        return $this->render('SalmaSymCartBundle:Offer:list.html.twig', array(
                    'offers' => $offers
        ));
    }

    public function showAction($id) {
        
        $timenow = new \DateTime("now");
        $em = $this->getDoctrine()->getManager();
        $offer = $em->getRepository('SalmaSymCartBundle:Offer')->findOneBy(array('id' => $id));
       
        if (!$offer) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        } else if ($offer->getStatus() == 'invisible' 
                || ( $offer->getStartDate() >= $timenow)
                || ( $offer->getEndDate() <= $timenow)) {
            
            return $this->redirect($this->generateUrl('product_show', array('id' => $offer->getProduct()->getId())
            ));
        }

        return $this->render('SalmaSymCartBundle:Offer:show.html.twig', array(
                    'offer' => $offer
        ));
    }

}
