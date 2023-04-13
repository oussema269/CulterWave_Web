<?php

namespace App\Form;

use App\Entity\Evennement;
use App\Entity\Sponsor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
class EvennementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('lieu', CountryType::class)
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le prix ne peut pas être negatif',
                    ]),
                    new NotNull([
                        'message' => 'Le prix ne peut pas être nul.'
                    ]),
                    
                   
                ]
            ])
            ->add('date')
            ->add('nbParticipants', NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le prix ne peut pas être negatif',
                    ]),
                    new NotNull([
                        'message' => 'Le nombre ne peut pas être negatif'
                    ]),
                    
                   
                ]
            ])
            
            ->add('typeEvenement', ChoiceType::class, [
                'choices' => [
                    'Musique' => 'Musique',
                    'Art' => 'Art',
                    'Theatre' => 'Theatre',
                    'Dance' => 'Dance',
                    'Foire' => 'Foire',
                    'Cinema' => 'Cinema',
                    
                ],

            ])
            ->add('sponsor', EntityType::class, [
                'class' => Sponsor::class,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evennement::class,
        ]);
    }
}
