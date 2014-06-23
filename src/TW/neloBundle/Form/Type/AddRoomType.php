<?php
	
	namespace TW\neloBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;

	class AddRoomType extends AbstractType{

		public function buildForm(FormBuilderInterface $builder, array $options){
			$builder
			//	->setAction($this->generateUrl('about_us'))
			//	->setMethod('GET')
				->add('number')
				->add('price')
				->add('facilities', 'entity', array('class'=>'TWneloBundle:Facilities', 'mapped'=> false, 'property'=>'facility', 'multiple'=>true ))
				->add('types', 'entity', array('class'=>'TWneloBundle:Type', 'mapped'=> false, 'property'=>'name' ))

				->add('Add', 'submit')
				->add('Back', 'submit');
			//	$builder->add('rooms', 'collection', array('type' => new AddRoomType()));
		
		}

		public function getName(){
			return 'add_room';
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver){
			$resolver->setDefaults(array('data_class'=>'TW\neloBundle\Entity\Rooms'));
		}
	}

?>