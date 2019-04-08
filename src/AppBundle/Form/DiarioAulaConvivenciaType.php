<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiarioAulaConvivenciaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idProfesor', EntityType::class, array(
                'label' => 'Profesor',
                'class' => 'AppBundle:Profesores',
                'choice_label' => function ($profesor) {
                    return $profesor->getNombreCompleto();
                },
                'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey chosen-select',
                    'data-placeholder' => 'Selecciona un profesor...',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('asiste', ChoiceType::class, array(
                'choices' => array(
                    'Pendiente' => '0',
                    'Ha asistido' => '1',
                ),
                'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey chosen-select',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('actitud', ChoiceType::class, array(
                'choices' => array(
                    'Positiva - A' => 'A',
                    'Normal - B' => 'B',
                    'Negativa - C' => 'C',
                ),
                'attr' => array(
                    'class' => '',
                ),
            ))
            ->add('observaciones', TextType::class, array(
                'required' =>false,
                'empty_data' => '',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'grey-text'),
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DiarioAulaConvivencia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_diarioaulaconvivencia';
    }


}
