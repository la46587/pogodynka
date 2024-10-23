<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Forecast;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ForecastType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('temperature', NumberType::class)
            ->add('humidity', NumberType::class)
            ->add('pressure', NumberType::class)
            ->add('description', ChoiceType::class, [
                'choices' => [
                    null => null,
                    'sunny' => 'sunny',
                    'windy' => 'windy',
                    'cloudy' => 'cloudy',
                    'rainy' => 'rainy',
                    'stormy' => 'stormy',
                    'snowy' => 'snowy',
                ],
            ])
            ->add('city', EntityType::class, [
                'required' => false,
                'class' => City::class,
                'choice_label' => 'cityName',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Forecast::class,
        ]);
    }
}
