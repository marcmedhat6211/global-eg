<?php

namespace MD\Bundle\CMSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PortfolioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('title')
                ->add('homePage', null, array('label' => 'Show Home Page', 'required' => FALSE))
                ->add('placement', 'choice', array(
                    'choices' => array(
                        3 => 'Global engineering & supply',
                        4 => 'Med. trade',
                        5 => 'Technology',
                        6 => '4Sale egypt',
                        7 => 'Global for real estate development',
                    ),
                ))
                ->add('youtubeUrl')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'MD\Bundle\CMSBundle\Entity\Portfolio'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'md_bundle_cmsbundle_portfolio';
    }

}
