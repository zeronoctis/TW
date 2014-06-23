<?php
	
	namespace TW\neloBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;

	class AddTypesType extends AbstractType{

		public function buildForm(FormBuilderInterface $builder, array $options){
			$builder
			//	->setAction($this->generateUrl('about_us'))
			//	->setMethod('GET')
				->add('name')
				->add('Add', 'submit')
				->add('Remove', 'submit')
				->add('Back', 'submit');
		}

		public function getName(){
			return 'type';
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver){
			$resolver->setDefaults(array('data_class'=>'TW\neloBundle\Entity\Type'));
		}
	}

?>