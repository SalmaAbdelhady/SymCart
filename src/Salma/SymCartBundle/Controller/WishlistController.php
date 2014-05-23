<?php

namespace Salma\SymCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Salma\SymCartBundle\Entity\Wishlist;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class WishlistController extends Controller {

    public function indexAction() {

        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $mywishlist = $em->getRepository('SalmaSymCartBundle:Wishlist')->findOneBy(
                array('user_id' => $user->getId()));
        $items = array(); 
if($mywishlist){
        $items = $mywishlist->getProduct()->toArray();
}
        return $this->render('SalmaSymCartBundle:Wishlist:wishlist.html.twig', array('items' => $items));
    }

    public function addAction($id) {
        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $wishlist = $em->getRepository('SalmaSymCartBundle:Wishlist')->findOneBy(
                array('user_id' => $user->getId()));

        $product = $em->getRepository('SalmaSymCartBundle:Product')->findOneBy(array(
            'id' => $id,
            'status' => 'visible'));

        if ($wishlist && $product) {
            if (!$wishlist->getProduct()->contains($product)) {
                $wishlist->addProduct($product);

                $em->flush();
            }
        } else if ($product) {
            $wishlist = new Wishlist();

            $wishlist->setUserId($user);
            $wishlist->addProduct($product);


            $em->persist($wishlist);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('wishlist_index'));
    }

    public function remvItemAction($id) {
        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $wishlist = $em->getRepository('SalmaSymCartBundle:Wishlist')->findOneBy(
                array('user_id' => $user->getId()));

        $product = $em->getRepository('SalmaSymCartBundle:Product')->findOneBy(array(
            'id' => $id));

        if ($wishlist && $product) {
            if ($wishlist->getProduct()->contains($product)) {
                $wishlist->removeProduct($product);

                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('wishlist_index'));
    }

    public function emptyAction() {
        
        $user = $this->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $wishlist = $em->getRepository('SalmaSymCartBundle:Wishlist')->findOneBy(
                array('user_id' => $user->getId()));



        if ($wishlist) {

           $wishlist->getProduct()->clear();
            
            $em->flush();
        }
        return $this->redirect($this->generateUrl('wishlist_index'));
    }

}
