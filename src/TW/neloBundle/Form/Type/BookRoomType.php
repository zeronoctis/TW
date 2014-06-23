<?php
	
	namespace TW\neloBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	use Doctrine\ORM\EntityRepository;


	class BookRoomType extends AbstractType{

		private $type;
		 
		public function __construct($type = null) 
	    { 
	        $this->type = $type; 
	    } 
		public function buildForm(FormBuilderInterface $builder, array $options){
			
			$builder
			//	->setAction($this->generateUrl('about_us'))
			//	->setMethod('GET')
				->add('arrivalDate', 'date', array('widget' => 'single_text', 'format' =>  'yyyy-MM-dd' ))
				->add('leavingDate', 'date', array('widget' => 'single_text', 'format' =>  'yyyy-MM-dd' ))
				->add('rooms', 'entity', array(
					'class'=>'TWneloBundle:Rooms',
					'query_builder' => function(EntityRepository $er) {
        				return $er->createQueryBuilder('r') 
        				->where('r.type = :type')
        				->andWhere('r.state = :state OR r.overbooked = :ovstate')
						->setParameters(array('state'=>0, 'type'=>$this->type, 'ovstate'=>1));
         			},
         			'mapped'=>false, 'property'=>'number', 'multiple'=>true 
				))
				
				->add('Book', 'submit')
				->add('Back', 'submit');
			//	$builder->add('rooms', 'collection', array('type' => new AddRoomType()));
		
		}

		public function getName(){
			return 'book_room';
		}
	}

?>
