<?php

namespace TW\neloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TW\neloBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller{
	public function aboutAction(){
		return $this->render('TWneloBundle:About:about.html.twig');	
	}
}

?>
