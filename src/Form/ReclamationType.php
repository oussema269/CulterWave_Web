<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('typeReclamation', ChoiceType::class, [
            'choices' => [
                'Scam' => 'scam',
                'Technique' => 'technique',
                'Qualité' => 'qualité',
            ],
            'placeholder' => 'Select a type',
            'required' => true,
        ])
        ->add('contenu', null, [
            'constraints' => [
                new Length([
                    'max' => 50,
                    'maxMessage' => 'la limite des characteres est {{ limit }} .',
                ]),
            ],
        ])
        ->add('datepro', DateType::class, [
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
        ])
            ->add('idReclamateur')
            ->add('idCibleReclamation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
