<?php

    namespace TW\neloBundle\Form\Type;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class UserType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder->add('username');
            $builder->add('password', 'repeated', array(
               'first_name'  => 'password',
               'second_name' => 'confirm',
               'type'        => 'password',
            ));
            $builder->add('email', 'email');
            $builder->add('Register', 'submit');
        }

        public function setDefaultOptions(OptionsResolverInterface $resolver)
        {
            $resolver->setDefaults(array('data_class' => 'TW\neloBundle\Entity\User'));
        }

        public function getName()
        {
            return 'user';
        }
    }

?>