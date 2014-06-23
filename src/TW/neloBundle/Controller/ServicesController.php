<?php

namespace TW\neloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TW\neloBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use TW\neloBundle\Form\Type\TaskType;


class ServicesController extends Controller{

	public function servicesAction(){
		return $this->render('TWneloBundle:Services:services.html.twig');	
	}

	public function newAction(Request $request){
		$task = new Task();
		$task->setTask('learn Symfony');
		$task->setDueDate(new \DateTime('tomorrow'));
		
		$form = $this->createForm(new TaskType(), $task);

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Task');

		$form->handleRequest($request);
			if($form->isValid()){
				//save it to database for example
			//$nextAction = $form->get('saveAndAdd')->isClicked()?'welcome':'rooms';
			//return $this->redirect($this->generateUrl($nextAction));
			$em->persist($task);
			$em->flush();
		}

		return $this->render('TWneloBundle:Services:new.html.twig', array('form' => $form->createView()));
	}
}

?>
