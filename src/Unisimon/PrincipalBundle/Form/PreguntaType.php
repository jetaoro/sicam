<?php

namespace Unisimon\PrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreguntaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textoAyuda')
            ->add('tipo')
            ->add('idEncuesta')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Unisimon\PrincipalBundle\Entity\Pregunta'
        ));
    }

    public function getName()
    {
        return 'unisimon_principalbundle_preguntatype';
    }
}
