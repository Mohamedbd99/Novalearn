<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\Exercice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExerciceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [ // Ensure correct spelling & type
                'label' => 'Titre de l’exercice',
                'attr' => [
                    'placeholder' => 'Entrez le titre...',
                    'class' => 'form-control'
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Ajoutez une description...',
                    'class' => 'form-control',
                    'rows' => 5
                ],
            ])
            ->add('created_at', DateTimeType::class, [
                'widget' => 'single_text', // Displays as a simple date input
                'label' => 'Date de création',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('course', EntityType::class, [
                'class' => Course::class,
                'choice_label' => 'titre',
                'label' => 'Cours associé',
                'placeholder' => 'Sélectionnez un cours',
                'attr' => [
                    'class' => 'form-control'
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exercice::class,
        ]);
    }
}