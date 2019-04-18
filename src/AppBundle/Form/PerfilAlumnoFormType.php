<?php

namespace AppBundle\Form;

use AppBundle\Entity\Alumno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PerfilAlumnoFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Nombre')
            ->add('Apellido1')
            ->add('Apellido2')
            ->add('NIE', IntegerType::class)
            ->add('Telefono', IntegerType::class, array('label' => 'Teléfono'))
            ->add('Email', EmailType::class)
            ->add('Direccion')
            ->add('codigoPostal', TextType::class, array(
                'label' => 'Código Postal',
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Alumno'
        ));
    }
}