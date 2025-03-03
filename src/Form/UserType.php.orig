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
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints as Assert;
>>>>>>> Gharsallah_Ali_Hamma

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('role', ChoiceType::class, [
            'choices' => [
<<<<<<< HEAD
                'Eleve' => 'Eleve',  
=======
                'Eleve' => 'ROLE_ELEVE',  
>>>>>>> Gharsallah_Ali_Hamma
            ],
            'label' => 'Rôle',
            'expanded' => false, 
            'multiple' => false, 
        ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
            ])
<<<<<<< HEAD
            ->add('age', IntegerType::class, [
                'label' => 'Âge',
                'required' => true,
            ])
            
            ->add('num_tel', IntegerType::class)

=======

     ->add('age', IntegerType::class, [
        'label' => 'Âge',
        'required' => true,
        'constraints' => [
            new Assert\Range([
                'min' => 4,
                'max' => 14,
                'notInRangeMessage' => 'L\'âge doit être compris entre 4 et 14 ans.'
            ])
        ]
    ])

    
    ->add('num_tel', TextType::class, [
        'label' => 'Numéro de téléphone',
        'required' => true,
        'attr' => [
            'placeholder' => 'Ex: 12345678',
            'maxlength' => 8,  // Limiter la saisie à 8 chiffres
        ],
        'constraints' => [
            new Assert\Regex([
                'pattern' => '/^[0-9]{8}$/',  // Valide que ce sont exactement 8 chiffres
                'message' => 'Le numéro de téléphone doit être composé de 8 chiffres.',
            ]),
        ],
    ])


    
>>>>>>> Gharsallah_Ali_Hamma
            ->add('difficulte', TextType::class, [
                'label' => 'Difficulté',
                'required' => true,
            ])
<<<<<<< HEAD
=======
    
>>>>>>> Gharsallah_Ali_Hamma
            ->add('niv_difficulte', ChoiceType::class, [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ],
                'label' => 'Niveau de Difficulté',
                'expanded' => false, 
                'multiple' => false, 
            ])
<<<<<<< HEAD
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'required' => true,
            ])
=======
    
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'required' => true,
                'constraints' => [
                    new Assert\Email([
                        'message' => 'L\'adresse e-mail n\'est pas valide.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|esprit\.tn|esen\.tn)$/',
                        'message' => 'L\'adresse e-mail doit appartenir à l\'un des domaines suivants : @gmail.com, @yahoo.com, @esprit.tn, @esen.tn.',
                    ]),
                ],
            ])

>>>>>>> Gharsallah_Ali_Hamma
            ->add('genre', ChoiceType::class, [
                'label' => 'Genre',
                'required' => false,
                'choices' => [
                    'Garçon' => 'Garçon',  
                    'Fille' => 'Fille',  
                ],
                'expanded' => true,  
                'multiple' => false, 
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true,
<<<<<<< HEAD
=======
                'attr' => [
                    'data-toggle' => 'password', // Utilisé pour le JavaScript
                    'id' => 'password-input',     // ID pour identifier facilement l'élément
                ],
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
