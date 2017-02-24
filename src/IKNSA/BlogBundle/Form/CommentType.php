<?php

namespace IKNSA\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('comment')
          ->add('like', ChoiceType::class, array(
            'choices' => array('Like' => 1, 'Dislike' => 0),
            'data' => 1,
            'expanded' => true,
            'required' => 'false',
            'attr' => array('class' => 'like-picture' )
          ));


    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IKNSA\BlogBundle\Entity\Comment'
        ));
    }
}
