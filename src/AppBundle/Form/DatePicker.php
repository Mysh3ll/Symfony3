<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use SC\DatetimepickerBundle\Form\Type\DatetimeType;

class DatePicker extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        // defaut options
        ->add('createdAt', DatetimeType::class)

        // full options
        ->add('updatedAt', DatetimeType::class, array( 'pickerOptions' =>
            array('format' => 'mm/dd/yyyy',
                'weekStart' => 0,
                'startDate' => date('m/d/Y'), //example
                'endDate' => '01/01/3000', //example
                'daysOfWeekDisabled' => '0,6', //example
                'autoclose' => false,
                'startView' => 'month',
                'minView' => 'hour',
                'maxView' => 'decade',
                'todayBtn' => false,
                'todayHighlight' => false,
                'keyboardNavigation' => true,
                'language' => 'en',
                'forceParse' => true,
                'minuteStep' => 5,
                'pickerReferer ' => 'default', //deprecated
                'pickerPosition' => 'bottom-right',
                'viewSelect' => 'hour',
                'showMeridian' => false,
                'initialDate' => date('m/d/Y', 1577836800), //example
                ))) ;

}
}
