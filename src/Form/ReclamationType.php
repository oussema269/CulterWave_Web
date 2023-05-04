<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

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
                'label' => 'date probleme',
            ])

            ->add('idciblereclamation', EntityType::class, [
                'class' => User::class,
                'label' => 'Cible Reclamation',
                'choice_label' => 'nom',
                // 'choice_value' => 'id',
                'choices' => $options['users'],
                'mapped' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['users']);
    }
}
