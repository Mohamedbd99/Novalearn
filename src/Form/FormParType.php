<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class FormParType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // src/Form/UserType.php
->add('role', ChoiceType::class, [
    'choices' => [
        'Parent' => 'Parent',
    ],
    'required' => true,  // Le champ doit être rempli
    'empty_data' => 'USER',  // Valeur par défaut si aucun choix n'est fait
])

->add('nom', TextType::class, [
    'required' => false,  // Champ optionnel
    'empty_data' => null,  // Si aucune valeur n'est envoyée, la valeur par défaut sera NULL
])

        ->add('prenom', TextType::class, [
            'label' => 'Prénom',
            'required' => true,
        ])
        ->add('age', IntegerType::class, [
            'label' => 'Âge',
            'required' => true,
        ])
        ->add('num_tel', IntegerType::class)

        ->add('email', EmailType::class, [
            'label' => 'Adresse e-mail',
            'required' => true,
        ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true,
            ])
           
    ->add('genre', ChoiceType::class, [
        'choices' => [
            'Homme' => 'Homme',
            'Femme' => 'femme',
            'Other' => 'other',
        ],
        'required' => true,  // S'assurer que le champ est requis
    ])
    // src/Form/UserType.php
    ->add('id_fils', IntegerType::class, [
    'required' => false,  // Rendre le champ optionnel
    'empty_data' => null,  // Si aucun ID n'est envoyé, la valeur par défaut sera NULL
]);

        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
