<?php

namespace App\Form;
use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('categorie', EntityType::class, [
            'class' => Categorie::class,
            'choice_label' => 'categorie',
        ])
        ->add('lib', TextType::class, [
            'label' => 'Produit',
            'constraints' => [
                new Assert\NotBlank(), // Le champ ne doit pas être vide
                new Assert\Length(['max' => 255]), // Le champ doit avoir une longueur maximale de 255 caractères
                new Assert\Type(['type' => 'string']), // Le champ doit être une chaîne de caractères
                new Assert\Regex([
                    'pattern' => '/^[^0-9]*$/',
                    'message' => 'Le champ ne doit pas contenir de nombres.'
                ]),
            ],
        ])
        ->add('stock', IntegerType::class, [
            'constraints' => [
                new Assert\NotNull(), // Le champ ne doit pas être nul
                new Assert\PositiveOrZero(), // Le champ doit être positif ou zéro
            ],
        ])
        ->add('prix', NumberType::class, [
            'constraints' => [
                new Assert\NotNull(), // Le champ ne doit pas être nul
                new Assert\Type(['type' => 'numeric']), // Le champ doit être un nombre
                new Assert\Positive(), // Le champ doit être positif
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
