<?php

namespace AppBundle\Form;

use AppBundle\Entity\Sanciones;
use AppBundle\Repository\SancionesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SancionFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->choices = $options['compound'];

        $builder
            ->add('idAlumno', EntityType::class, array(
                'label' => 'Alumno/a',
                'class' => 'AppBundle:Alumno',
                'placeholder' => '',
                'choices' => $this->choices[0],
                'choice_label' => function ($alumno) {
                    return $alumno->getNombreCompletoYCurso();
                },
                'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey chosen-select',
                    'id' => 'selectAlumno',
                    'data-placeholder' => 'Seleccione alumnado...',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
//            ->add('Fecha', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('idTipo', EntityType::class, array(
                'class' => 'AppBundle:TipoSancion',
                'choices' => $this->choices[1],
                'choice_label' => function ($tipo) {
                    return $tipo->getTipo();
                },
                'attr' => array('class' => ''),
                'label_attr' => array('class' => '')
            ))
//            ->add('FechaInicio', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
//            ->add('FechaFinal', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('Sancion', TextType::class, array(
                'label' => 'Sanción',
                'attr' => array('class' => ''),
                'label_attr' => array('class' => '')
            ))
            ->add('Observaciones', TextareaType::class, array(
                'required' =>false,
                'empty_data' => '',
                'attr' => array('class' => 'materialize-textarea minTextArea'),
                'label_attr' => array('class' => '')
            ))
            ->add('Evaluacion', TextType::class, array(
                'required' =>false,
                'empty_data' => '',
                'label' => 'Evaluación',
                'attr' => array('class' => ''),
                'label_attr' => array('class' => '')
            ))
            ->add('fechaConfirmacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey'),
                'label' => 'Fecha confirmación',
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('fechaComunicacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey marginBottom'),
                'label' => 'Fecha comunicación',
                'label_attr' => array('class' => 'w3-text-teal')
            ));
//            ->add('PuntosRecuperados', IntegerType::class, array(
//                'required' =>false,
//                'empty_data' => 0,
//                'label' => 'Puntos Recuperados',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ));
//            ->add('idEstado', EntityType::class, array(
//                'class' => 'AppBundle:EstadosSancion',
//                'choice_label' => 'estado',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sanciones'
        ));
    }

}
