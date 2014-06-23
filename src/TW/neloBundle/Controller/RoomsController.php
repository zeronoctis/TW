<?php

namespace TW\neloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TW\neloBundle\Form\Type\AddRoomType;
use TW\neloBundle\Form\Type\DeleteRoomType;
use TW\neloBundle\Form\Type\AddTypesType;
use TW\neloBundle\Form\Type\BookRoomType;
use TW\neloBundle\Form\Type\AddFacilitiesType;
use TW\neloBundle\Form\Type\FacilitiesType;
use TW\neloBundle\Entity\Rooms;
use TW\neloBundle\Entity\Type;
use TW\neloBundle\Entity\User;
use TW\neloBundle\Entity\Facilities;


class RoomsController extends Controller{

	//show the rooms and redirect to booking
	public function roomsAction(Request $request){//Request $request){
	//	$request->query->get('param'); //get
	//		$request->request->get('param'); //post
	
	//	if( false === $this->get('security.context')->isGranted('ROLE_ADMIN')){
	//		throw $this->createAccessDeniedException('Unable to access this page!');			
	//	}
		
		if ($request->request->has('singleapartment')) {
			$value = $request->request->get('singleapartment');
    		//return $this->redirect($this->generateUrl('rooms', array('type'=>$value)));
			$response = $this->redirect('booking/'.$value);
			return $response;
	
		}

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Rooms');

		//update outdated bookings
		{
			$camere = $em->getRepository('TWneloBundle:Rooms')->findAll();
			foreach ($camere as $camera) {
				$data = $camera->getLeavingDate();
				$diff = date_diff( new \DateTime(), $data );
				$dif_integer = $diff->format("%d");
				if( $dif_integer < 0 ){//expirat
					$camera->setState(0);
					$camera->setLeavingDate( new \DateTime() );
				}
			}
		}

		//select rooms for overbooking
		{
			$roomsNumber = count($camere);
			$nrCamereOcupate = count( $em->getRepository('TWneloBundle:Rooms')->findOcupiedButNotOverbooked(1) );

			// cat % camere ocupate
			$lso = $nrCamereOcupate * 100/$roomsNumber;

			//peste 70 % camere ocupate
			if($lso >= 70)
			{	
				//25 % din lso %
				$dzscls = 25 * $lso / 100;

				//camere ocupate dar nemarcate pt overbookinc
				$CamereOcupate = $em->getRepository('TWneloBundle:Rooms')->findOcupiedButNotOverbooked(1);

				for( $i = 0; $i <= $dzscls; $i++ ){
					$CamereOcupate->setOverbooked(1);
				}
			}

		}

		//afisare camere

		//how many types I have
		$alltypes =  $em->getRepository('TWneloBundle:Type')->findAllWithId() ;
		//an array with all the the rooms for each type
		$roomsForEachType = array();
		//pt fiecare o sa iau id-ul corect
		foreach ($alltypes as $value) {
			$rooms = $repository->findAllAvailableAndOverbookedByTypeId($value->getId());
			array_push($roomsForEachType, $rooms);
		}
			//all available rooms for a certain type Id
				
			//we save all available rooms for each type into an array, by format type=>rooms of that type
			//$typeAndRoom = array( $i => $rooms );
			//now we save this map to a single array for later use


		//finally we pass the array to the template
		return $this->render( 'TWneloBundle:Rooms:rooms.html.twig', array( 'typesandrooms' => $roomsForEachType));	

	
	}

	//booking rooms
	public function bookingAction(Request $request, $type){

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Rooms');

		$rooms = $repository->findAllAvailableAndOverbookedByTypeId($type);

		//$room = new Rooms();
		//$room->setState(false);
		$user = new User();
		$form = $this->createForm(new BookRoomType($type), $user);

		$error = '';

		// now parse the request...

		$form->handleRequest($request);
				//booking
				if($form->get('Book')->isClicked()){

					$user2 = $em->getRepository('TWneloBundle:User')->findOneById( $this->getUser()->getId() );  //userul curent
					foreach( $form['rooms']->getData() as $room) { 
						$value = $room->getId(); //selectam id-urile camerelor
						$user2->addRoom($em->getReference('TWneloBundle:Rooms', $value)); //facem legatura intre camera - user
						//$room->addUser($user2);
						$room->setState(true);
						$room->setLeavingDate($form['leavingDate']->getData());
					}
							
					$user2->setArrivalDate($form['arrivalDate']->getData());
					$user2->setLeavingDate($form['leavingDate']->getData());


					$em->persist($user2);
					$em->flush();		
						
					return $this->redirect($this->generateUrl('welcome'));
				}

				if($form->get('Back')->isClicked()){
					return $this->redirect($this->generateUrl('rooms'));
				}
		

		return $this->render('TWneloBundle:Rooms:bookRooms.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error ))	;
	}

	//-------------------- FOR ADMIN -------------------------------

	//facilities editor
	public function manageFacilityAction(Request $request){

		$facility = new Facilities();

		$form = $this->createForm(new AddFacilitiesType(), $facility);

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Facilities');

		$error = '';
		$form->handleRequest($request);
			if($form->isValid()){
				//add
				if($form->get('Add')->isClicked()){		
					$facilities_to_add = $repository->findByFacility($facility->getFacility());
					if($facility->getFacility() == null){
						$error = 'Please complete the field';
						$facilities = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageFacility.html.twig', array('form' => $form->createView(), 'facilities' => $facilities, 'error'=> $error));
					}
					if(count($facilities_to_add) == 0){
						$em->persist($facility);
						$em->flush();	
					}else{
						$error = 'Entry already exist';
						$facilities = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageFacility.html.twig', array('form' => $form->createView(), 'facilities' => $facilities, 'error'=> $error));
					}	
					return $this->redirect($this->generateUrl('manage_facilities'));
				}
				if($form->get('Remove')->isClicked()){
					if($facility->getFacility() == null){
						$error = 'Please complete the field';
						$facilities = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageFacility.html.twig', array('form' => $form->createView(), 'facilities' => $facilities, 'error'=> $error));
					}

					$facilities_to_del = $repository->findByFacility($facility->getFacility());
					if(count($facilities_to_del) == 0){
						$error = 'Facility does not exist';
						$facilities = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageFacility.html.twig', array('form' => $form->createView(), 'facilities' => $facilities, 'error'=> $error));
					}else{
						foreach ($facilities_to_del as $ftd ) {
							$em->remove($ftd);
							$em->flush();		
						}
					}
					return $this->redirect($this->generateUrl('manage_facilities'));
				}if($form->get('Back')->isClicked()){
					return $this->redirect($this->generateUrl('admin_page'));
				}
			}

		$facilities = $repository->findAll();
		return $this->render('TWneloBundle:Rooms:manageFacility.html.twig', array('form' => $form->createView(), 'facilities' => $facilities, 'error'=> $error));
	}

	//types editor
	public function manageTypeAction(Request $request){

		$type = new Type();

		$form = $this->createForm(new AddTypesType(), $type);

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Type');

		$error = '';
		$form->handleRequest($request);
			if($form->isValid()){
				//add
				if($form->get('Add')->isClicked()){		
					$types_to_add = $repository->findByName($type->getName());
					if($type->getName() == null){
						$error = 'Please complete the field';
						$types = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageType.html.twig', array('form' => $form->createView(), 'types' => $types, 'error'=> $error));
					}
					if(count($types_to_add) == 0){
						$em->persist($type);
						$em->flush();	
					}else{
						$error = 'Entry already exist';
						$types = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageType.html.twig', array('form' => $form->createView(), 'types' => $types, 'error'=> $error));
					}	
					return $this->redirect($this->generateUrl('manage_types'));
				}
				//delete
				if($form->get('Remove')->isClicked()){
					if($type->getName() == null){
						$error = 'Please complete the field';
						$types = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageType.html.twig', array('form' => $form->createView(), 'types' => $types, 'error'=> $error));
					}

					$types_to_del = $repository->findByName($type->getName());
					if(count($types_to_del) == 0){
						$error = 'Type does not exist';
						$types = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageType.html.twig', array('form' => $form->createView(), 'types' => $types, 'error'=> $error));
					}else{
						foreach ($types_to_del as $ttd ) {
							$em->remove($ttd);
							$em->flush();		
						}
					}
					return $this->redirect($this->generateUrl('manage_types'));
				}if($form->get('Back')->isClicked()){
					return $this->redirect($this->generateUrl('admin_page'));
				}
			}

		$types = $repository->findAll();
		return $this->render('TWneloBundle:Rooms:manageType.html.twig', array('form' => $form->createView(), 'types' => $types, 'error'=> $error));
	}

	//rooms editor ADD
	public function manageRoomAddAction(Request $request){

		$room = new Rooms();
		$room->setState(false);

		$form = $this->createForm(new AddRoomType(), $room);

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Rooms');

		$error = '';

		$form->handleRequest($request);
			if($form->isValid()){
				//add
				if($form->get('Add')->isClicked()){

	    			$rooms_to_add = $repository->findByNumber($room->getNumber());
					if($room->getNumber() == null){
						$error = 'Please complete the field';
						$rooms = $repository->findAll();
					
						return $this->render('TWneloBundle:Rooms:manageRoomAdd.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
					}
					if(count($rooms_to_add) == 0 || count($rooms_to_add) == null){//daca nu mai exista
							$values = array(); // array de facilitati
							$room2 = new Rooms(); //noua camera ce va fi salvata in tabel
							foreach( $form['facilities']->getData() as $facility) { 
								$value = $facility->getID(); //punem id-urile facilitatilor
								array_push($values, $value);// salvam id-urile intr-un array
								$room2->addFacilities($em->getReference('TWneloBundle:Facilities', $value)); //facem legatura intre camera - facilitati
							}

							$typeID = $form['types']->getData()->getID(); // id-ul tipului de camera
							$type = $em->getRepository('TWneloBundle:Type')->find($typeID);
							$room2->setType($type); //facem legatura intre camera - facilitati

							$room2->setNumber($room->getNumber());
							$room2->setPrice($room->getPrice());
							$room2->setState($room->getState());

							$em->persist($room2);
							$em->flush();	
						
							$rooms = $repository->findAll();
							return $this->render('TWneloBundle:Rooms:manageRoomAdd.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
					}else{
						$error = 'Room with same number already exist';
						$rooms = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageRoomAdd.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
					}	
					return $this->redirect($this->generateUrl('manage_rooms_add'));
			}
		
				if($form->get('Back')->isClicked()){
					return $this->redirect($this->generateUrl('admin_page'));
				}
		}
			

		$rooms = $repository->findAll();
		return $this->render('TWneloBundle:Rooms:manageRoomAdd.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
	}

	//manage room DELETE
	public function manageRoomDeleteAction(Request $request){

		$room = new Rooms();
		$room->setState(false);

		$form = $this->createForm(new DeleteRoomType(), $room);

		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TWneloBundle:Rooms');

		$error = '';

		$form->handleRequest($request);
			if($form->isValid()){
				if($form->get('Remove')->isClicked()){
					if($room->getNumber() == null){
						$error = 'Please complete the field';
						$rooms = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageRoomDelete.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
					}

					$rooms_to_del = $repository->findByNumber($room->getNumber());
					if(count($rooms_to_del) == 0){
						$error = 'Room does not exist';
						$rooms = $repository->findAll();
						return $this->render('TWneloBundle:Rooms:manageRoomDelete.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));
					}else{
						foreach ($rooms_to_del as $rtd ) {
							$em->remove($rtd);
							$em->flush();		
						}
					}
					return $this->redirect($this->generateUrl('manage_rooms_delete'));
				}
				if($form->get('Back')->isClicked()){
					return $this->redirect($this->generateUrl('admin_page'));
				}
				
			}
				$rooms = $repository->findAll();
				return $this->render('TWneloBundle:Rooms:manageRoomDelete.html.twig', array('form' => $form->createView(), 'rooms' => $rooms, 'error'=> $error));

	}

}

?>