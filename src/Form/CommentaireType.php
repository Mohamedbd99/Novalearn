<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => 'Votre commentaire',
                'attr' => ['class' => 'form-control', 'rows' => 3]
            ])
            ->add('post', EntityType::class, [
                'class' => Post::class,
                'choice_label' => 'id',
                'attr' => ['hidden' => true],
            ])
            ;
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
            'post' => null, // Ajouter l'option 'post'
        ]);
    }
}
