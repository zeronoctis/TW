<?php
	
	namespace TW\neloBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;

	class BookRoomType extends AbstractType{

		public function buildForm(FormBuilderInterface $builder, array $options){
			$builder
			//	->setAction($this->generateUrl('about_us'))
			//	->setMethod('GET')
				->add('arrivalDate', 'date')
				->add('leavingDate', 'date')
				->add('rooms', 'entity', array('class'=>'TWneloBundle:Rooms', 'mapped'=> false, 'property'=>'number', 'multiple'=>true ))
				
				->add('Add', 'submit')
				->add('Back', 'submit');
			//	$builder->add('rooms', 'collection', array('type' => new AddRoomType()));
		
		}

		public function getName(){
			return 'book_room';
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver){
			$resolver->setDefaults(array('data_class'=>'TW\neloBundle\Entity\User'));
		}
	}

?>