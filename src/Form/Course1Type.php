<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints\File;

use App\Entity\Course;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class Course1Type extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('contenu', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Saisissez le contenu du cours ici...',
                    'rows' => 10, // Définit la hauteur du champ
                    'class' => 'form-control' // Pour le styling avec Bootstrap, si utilisé
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le contenu ne peut pas être vide.']),
                    new Length([
                        'max' => 100000, // Limite à 100000 caractères
                        'maxMessage' => 'Le contenu ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du cours',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                    ]),
                ],
            ])
            ->add('video', FileType::class, [
                'label' => 'Vidéo du cours',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '100M',
                        'mimeTypes' => ['video/mp4', 'video/mpeg', 'video/quicktime'],
                        'mimeTypesMessage' => 'Veuillez télécharger une vidéo valide (MP4, MPEG, MOV)',
                    ])
                ]
            ]);
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}