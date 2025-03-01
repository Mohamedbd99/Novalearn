<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du post',
                'attr' => [
                    'placeholder' => 'Entrez le titre du post',
                    'required' => true,
                ],
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenu du post',
                'attr' => [
                    'placeholder' => 'Entrez le contenu du post',
                    'rows' => 5,
                    'required' => true,
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (JPG, PNG)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG ou PNG)',
                    ])
                ],
            ])
            ->add('anonymous', CheckboxType::class, [
                'label' => 'Publier en anonyme',
                'required' => false,
                'mapped' => false, // Ce champ n'est pas lié à une propriété de l'entité
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}