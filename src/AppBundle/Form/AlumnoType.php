<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlumnoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')->add('apellido1')->add('apellido2')->add('nie')->add('telefono')->add('email')->add('direccion')->add('codigoPostal')->add('puntos')->add('puntosIniciales')->add('tutorL1')->add('tutorL2')->add('telefonoTL1')->add('telefonoTL2')
        ->add('msgTL1', CheckboxType::class, array('label' => 'Enviar SMS tutor legal 1', 'required' => false,) )
        ->add('msgTL2', CheckboxType::class, array('label' => 'Enviar SMS tutor legal 2', 'required' => false,) );
        //->add('foto') ya existe una vista especifica para la foto
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

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_alumno';
    }


}
