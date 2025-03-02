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
        
        ->add('role', ChoiceType::class, [
            'choices' => [
                'Parent' => 'ROLE_PARENT',
            ],
            'required' => true,
        ])

->add('nom', TextType::class, [
    'required' => false,  
    'empty_data' => null,  
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
        'required' => true,  
    ])
    
    ->add('id_fils', IntegerType::class, [
        'required' => false,  
        'empty_data' => null,  
    ])
    
    ->add('niv_difficulte', IntegerType::class, [
        'required' => false,
        'data' => 1, // Assignation automatique de la valeur 1
        'attr' => ['hidden' => true], // Caché dans le formulaire HTML
    ]);
    
    
                
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
