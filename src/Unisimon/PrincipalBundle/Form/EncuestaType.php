<?php

namespace Unisimon\PrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('modificado')
            ->add('estado')
            ->add('idUsuario')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Unisimon\PrincipalBundle\Entity\Encuesta'
        ));
    }

    public function getName()
    {
        return 'unisimon_principalbundle_encuestatype';
    }
}