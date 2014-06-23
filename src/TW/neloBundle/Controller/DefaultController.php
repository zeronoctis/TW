<?php

namespace TW\neloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//pt exemplu cu baza de date

use TW\neloBundle\Entity\Product;
use TW\neloBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller{

	public function gohomeAction(){
		return $this->redirect($this->generateUrl('welcome'));	
	}

	public function homeAction(){
		$format = $this->getRequest()->getRequestFormat();
		return $this->render('TWneloBundle:Default:home.'.$format.'.twig');	
	}

	public function createAction(){
		$category = new Category();
		$category->setName('Main Products');

		$product = new Product();
		$product->setName('A Foo Bar');
		$product->setPrice('19.99');
		$product->setDescription('Lorem ipsum dolor');
		$product->setCategory($category);

		$em = $this->getDoctrine()->getManager();
		$em->persist($category);
		$em->persist($product);
		$em->flush();

		return new Response('Created product id'.$product->getId().'and category id '.$category->getId());
	}
	
	public function updateAction($id, $name){
		$em = $this->getDoctrine()->getManager();
		$product = $em->getRepository('TWneloBundle:Product')->find($id);

		if(!$product){
			throw $this->createNotFoundException('No product found for id '.$id);
		}

		$product->setName($name); //update
		//	$em->remove($product); //delete
		$em->flush();

		$this->get('session')->getFlashBag()->add('notice', 'Your changes were saved!');
		return $this->redirect($this->generateUrl('welcome'));
	}

}

?>
