<?php

	namespace TW\neloBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;

	class UsefulController extends Controller{

		public function faqAction(){
			return $this->render('TWneloBundle:Useful:faq.html.twig');	
		}

		public function termsAction(){
			return $this->render('TWneloBundle:Useful:terms.html.twig');	
		}

		public function policyAction(){
			return $this->render('TWneloBundle:Useful:policy.html.twig');	
		}

		public function generalinfoAction(){
			return $this->render('TWneloBundle:Useful:generalinfo.html.twig');	
		}
	
	}

?>