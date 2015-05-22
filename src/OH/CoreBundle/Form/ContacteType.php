<?php

namespace OH\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContacteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', 'text')
            ->add('mail', 'mail')
            ->add('message', 'textarea')
            ->add('created', 'date')
            ->add('envoyer', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OH\CoreBundle\Entity\Contacte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oh_corebundle_contacte';
    }
}
