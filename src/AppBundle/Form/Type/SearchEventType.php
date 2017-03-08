<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class SearchEventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search', TextType::class, array('required' => false))
                ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'html5'  => false,
                'format'         => 'dd/MM/yyyy',
                'model_timezone' => 'Europe/Paris',
                'required' => false,
                'constraints' => array(new GreaterThanOrEqual("today")),
                ])
                ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'html5'  => false,
                'format'         => 'dd/MM/yyyy',
                'model_timezone' => 'Europe/Paris',
                'required' => false,
                'constraints' => array(new GreaterThanOrEqual("today")),
                ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'app_bundle_search_event';
    }
}
