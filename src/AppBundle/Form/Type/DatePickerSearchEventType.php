<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class DatePickerSearchEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDebut', DateType::class, [
            'widget'         => 'single_text',
            'html5'          => false,
            'format'         => 'dd/MM/yyyy',
            'model_timezone' => 'Europe/Paris',
            'required'       => true,
            'constraints'    => array(new GreaterThanOrEqual("today")),
        ])
            ->add('dateFin', DateType::class, [
                'widget'         => 'single_text',
                'html5'          => false,
                'format'         => 'dd/MM/yyyy',
                'model_timezone' => 'Europe/Paris',
                'required'       => true,
                'constraints'    => array(new GreaterThanOrEqual("today")),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'app_bundle_date_picker_search_event_type';
    }
}
