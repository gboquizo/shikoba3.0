<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistroFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Usuario')
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('roles', ChoiceType::class, array(
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'Alumno' => "ROLE_USER",
                    'Tutor' => "ROLE_TUTOR",
                    'TutorD' => "ROLE_TUTORD",
                    'Profesor' => "ROLE_PROFESOR",
                    'Jefatura' => "ROLE_ADMIN",
                    'Convivencia' => "ROLE_CONVIVENCIA",
                ),
            ));
    }
}