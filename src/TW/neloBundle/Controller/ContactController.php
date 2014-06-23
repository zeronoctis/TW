<?php

namespace TW\neloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller{
	public function locationAction(){
		return $this->render('TWneloBundle:Contact:contact.html.twig');	
	}
}

?>
