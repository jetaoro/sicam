<?php

namespace Unisimon\PrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespuestaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valorRespuesta')
            ->add('idPregunta')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Unisimon\PrincipalBundle\Entity\Respuesta'
        ));
    }

    public function getName()
    {
        return 'unisimon_principalbundle_respuestatype';
    }
}
