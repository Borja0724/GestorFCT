<?php

namespace GestorFCTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class EmpresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre',TextType::class,array('label_attr'=>array('class'=>'form')))
        ->add('direccion',TextType::class,array('label_attr'=>array('class'=>'form')))
        ->add('cp',NumberType::class,array('label_attr'=>array('class'=>'form')))
        ->add('telefono1',NumberType::class,array('label_attr'=>array('class'=>'form')))
        ->add('telefono2',NumberType::class,array('label_attr'=>array('class'=>'form')))
        ->add('fechaCreacion',TextType::class,array('label_attr'=>array('class'=>'form')))
        ->add('Guardar',SubmitType::class)
        ->add('Borrar',ResetType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestorFCTBundle\Entity\Empresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorfctbundle_empresa';
    }


}
