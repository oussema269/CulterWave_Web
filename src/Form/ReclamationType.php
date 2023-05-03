<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //->add('typereclamation')
            ->add('typereclamation', ChoiceType::class, [
                'label' => 'Type :',
                'choices' => [
                    'Scam' => 'scam',
                    'Technique' => 'technique',
                    'Personelle' => 'personelle',
                ],
                'placeholder' => 'choisis un type',
            ])

            ->add('contenu')
            ->add('datepro', null, [
                'label' => 'date',
            ])
            ->add('idreclamateur', null, [
                'label' => 'Reclamateur',
            ])
            ->add('idciblereclamation', null, [
                'label' => 'Cible Reclamation',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
