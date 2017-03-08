<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreEvent')
            ->add('dateEvent', DateType::class, [
                'widget' => 'single_text',
                'html5'  => false,
//                'format'         => 'dd-MM-yyyy',
//                'model_timezone' => 'Europe/Paris',
            ])
//            ->add('path')
            ->add('imageFile', VichImageType::class, array('required' => false,))
            ->add('idType', EntityType::class, array(
                'placeholder'   => 'Choisir une catégorie',
                'class'         => 'AppBundle:Typeevent',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.libelleType', 'ASC');
                },
                'choice_label'  => 'libelleType',
            ))
            ->add('idSalle', EntityType::class, array(
                'placeholder'   => 'Choisir une salle',
                'class'         => 'AppBundle:Salle',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomSalle', 'ASC');
                },
                'choice_label'  => 'nomSalle',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_event';
    }


}
