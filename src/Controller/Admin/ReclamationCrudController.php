<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use App\Service\BadWordsFilter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ReclamationCrudController extends AbstractCrudController
{
    private $badWordsFilter;

    public function __construct(BadWordsFilter $badWordsFilter)
    {
        $this->badWordsFilter = $badWordsFilter;
    }

    public static function getEntityFqcn(): string
    {
        return Reclamation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Réclamation')
            ->setEntityLabelInPlural('Réclamations')
            ->setDefaultSort(['createdAt' => 'DESC'])
            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('nom', 'Nom');
        yield EmailField::new('email', 'Email');
        yield TextareaField::new('message')
            ->formatValue(function ($value) {
                return $this->badWordsFilter->filter($value);
            });
        yield ChoiceField::new('priorite', 'Priorité')
            ->setChoices([
                'Basse' => 'Basse',
                'Moyenne' => 'Moyenne',
                'Haute' => 'Haute',
                'Urgente' => 'Urgente'
            ]);
        yield ChoiceField::new('statut', 'Statut')
            ->setChoices([
                'En attente' => 'En attente',
                'En cours' => 'En cours',
                'Traitée' => 'Traitée'
            ]);
        yield AssociationField::new('category', 'Catégorie');
        yield DateTimeField::new('createdAt', 'Date de création')
            ->hideOnForm();
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
                return $action->setIcon('fa fa-plus')->addCssClass('btn btn-success');
            })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
                return $action->setIcon('fa fa-edit')->addCssClass('btn btn-warning');
            })
            ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $action) {
                return $action->setIcon('fa fa-eye')->addCssClass('btn btn-info');
            })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                return $action->setIcon('fa fa-trash')->addCssClass('btn btn-danger');
            });
    }
}
