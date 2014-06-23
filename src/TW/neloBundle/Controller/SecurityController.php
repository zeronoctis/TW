<?php

	namespace TW\neloBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Security\Core\SecurityContextInterface;
	use TW\neloBundle\Form\Type\UserType;
	use TW\neloBundle\Entity\User;
	use TW\neloBundle\Entity\Role;

	class SecurityController extends Controller{

		//login
		public function loginAction(Request $request){
			$session = $request->getSession();

			//catch errors
			if($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
				$error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
			}elseif(null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
				$error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
				$session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
			}else{
				$error = '';
			}

			//last username entered by the user
			$lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

			return $this->render('TWneloBundle:Security:login.html.twig', array('last_username'=>$lastUsername, 'error'=>$error));
		}

		//register new users
		public function registerAction(request $request) //creaza formularul pt register
    	{
    		$em = $this->getDoctrine()->getManager();
    		$roleRepository = $em->getRepository('TWneloBundle:Role');
		        
	        $user = new User();
	        //$role = new Role();
	        //get the id of the role i want

			$roleID = 1;
			//$roleID = $em->createQuery('SELECT id FROM TWneloBundle:Role WHERE role = ?1')->setParameter(1, 'ROLE_USER')->getResult();
			//get the role reference based on the id
			$user->addRole($em->getReference('TWneloBundle:Role', $roleID));
			//$role->setRole('ROLE_USER');
			//$role->addUser($user);
	        //$user->addRole($role);
	        $form = $this->createForm(new UserType(), $user);

	        $form->handleRequest($request);

		    if ($form->isValid()) {

		        $em->persist($user);
		    //    $em->persist($role);
		        $em->flush();

		        return $this->redirect($this->generateUrl('welcome'));
		    }


	        return $this->render( 'TWneloBundle:Security:register.html.twig', array('form' => $form->createView()) );
    	}

    	//admin page
    	public function adminAction()
    	{
    	    return $this->render('TWneloBundle:Security:admin.html.twig');
    	}
	}


?>