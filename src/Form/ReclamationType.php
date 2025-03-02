<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
=======
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
>>>>>>> 50bad6b7 (projet)
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
>>>>>>> 50bad6b7 (projet)

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'nom',
                'label' => 'Catégorie',
                'placeholder' => 'Choisissez une catégorie',
<<<<<<< HEAD
                'attr' => ['class' => 'form-select']
            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => ['class' => 'form-control']
=======
                'attr' => [
                    'class' => 'form-select mb-3',
                    'required' => true
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez choisir une catégorie'
                    ])
                ]
            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Entrez votre nom complet',
                    'minlength' => 2,
                    'maxlength' => 100
                ],
                'disabled' => $options['is_edit'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre nom'
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Votre nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'exemple@domaine.com'
                ],
                'disabled' => $options['is_edit'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre adresse email'
                    ]),
                    new Email([
                        'message' => 'Veuillez entrer une adresse email valide'
                    ])
                ]
>>>>>>> 50bad6b7 (projet)
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
<<<<<<< HEAD
                    'class' => 'form-control',
                    'rows' => 5
                ]
            ])
        ;
=======
                    'class' => 'form-control mb-3',
                    'rows' => 5,
                    'placeholder' => 'Décrivez votre problème en détail...',
                    'minlength' => 10,
                    'maxlength' => 1000
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre message'
                    ]),
                    new Length([
                        'min' => 10,
                        'max' => 1000,
                        'minMessage' => 'Votre message doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre message ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('priorite', ChoiceType::class, [
                'choices' => [
                    'Basse' => 'Basse',
                    'Moyenne' => 'Moyenne',
                    'Haute' => 'Haute',
                    'Urgente' => 'Urgente'
                ],
                'attr' => [
                    'class' => 'form-control mb-3'
                ]
            ]);

        if (!$options['is_user']) {
            $builder->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'En attente',
                    'En cours' => 'En cours',
                    'Traitée' => 'Traitée'
                ]
            ]);
        }
>>>>>>> 50bad6b7 (projet)
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
<<<<<<< HEAD
=======
            'is_edit' => false,
            'is_user' => false,
>>>>>>> 50bad6b7 (projet)
        ]);
    }
}
