<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class NewpasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Email', EmailType::class)
            ->add('code', TextType::class)
            ->add('password', PasswordType::class, [
                'constraints' => [
                    new Length(['min' => 8])
                ]
            ])
            ->add('password1', PasswordType::class, [
                'constraints' => [
                    new Length(['min' => 8])
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Confirm',
            ]);
    }
}
// ->add('Email', EmailType::class)
// ->add('code', TextType::class)
// ->add('password', PasswordType::class)
// ->add('password1', PasswordType::class)

// ->add('submit', SubmitType::class, [
//     'label' => 'Confirm',
// ]);