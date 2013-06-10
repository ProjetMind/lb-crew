<?php

namespace LBcrew\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class videoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre_video',        'text')
            ->add('file',               'file')
            ->add('descrip_video',      'textarea')
           /*->add('genres_video',   'collection', array('type'          => new genreVideoType(),
                                                        'allow_add'     => true,
                                                        'allow_delete'  => true,
                                                         'by_reference' => false) )*/
        ; 
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LBcrew\MediaBundle\Entity\video'
        ));
    }

    public function getName()
    {
        return 'lbcrew_mediabundle_videotype';
    }
}
