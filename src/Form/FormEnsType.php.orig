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

class FormEnsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
        // src/Form/UserType.php
->add('role', ChoiceType::class, [
    'choices' => [
        'Enseignant' => 'Enseignant',
        'Parent' => 'Parent',
        'User' => 'User',
        'Medecin' => 'Medecin',
    ],
    'required' => true,  // Le champ doit être rempli
    'empty_data' => 'USER',  // Valeur par défaut si aucun choix n'est fait
])

->add('nom', TextType::class, [
    'required' => false,  // Champ optionnel
    'empty_data' => null,  // Si aucune valeur n'est envoyée, la valeur par défaut sera NULL
=======
        
->add('role', ChoiceType::class, [
    'choices' => [
        'Enseignant' => 'ROLE_ENSEIGNANT',
        'Parent' => 'ROLE_PARENT',
        'Eleve' => 'ROLE_ELEVE',
        'Medecin' => 'ROLE_MEDECIN',
    ],
    'required' => true,    
])

->add('nom', TextType::class, [
    'required' => false,  
    'empty_data' => null,  
>>>>>>> Gharsallah_Ali_Hamma
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
<<<<<<< HEAD
        'required' => true,  // S'assurer que le champ est requis
=======
        'required' => true,  
>>>>>>> Gharsallah_Ali_Hamma
        ])
        ->add('specialite', ChoiceType::class, [
            'choices' => [
                'Mathématiques' => 'Mathématiques',
                'Langues' => 'Langues',
                'Informatique' => 'Informatique',
                'Musique' => 'Musique',
                'Ecriture' => 'Ecriture',
                
            ],
<<<<<<< HEAD
            'required' => true,  // S'assurer que le champ est requis
=======
            'required' => true,  
>>>>>>> Gharsallah_Ali_Hamma
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
