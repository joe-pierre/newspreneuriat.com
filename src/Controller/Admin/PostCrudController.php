<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\AttachmentType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle(Crud::PAGE_INDEX, 'Liste des articles')
        ->setPageTitle(Crud::PAGE_NEW, 'Créer un nouvel article')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(DateTimeFilter::new('createdAt', 'Date de création'))
            ->add(DateTimeFilter::new('publishedAt', 'Date de publication'))
            ->add(EntityFilter::new('author', 'Auteur'))
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', label: 'Titre de l\'article');
        yield SlugField::new('slug', label: 'Slug')->setTargetFieldName('title');
        yield TextareaField::new('body', label: 'Contenu')->hideOnIndex();
        yield CollectionField::new('attachment')->setEntryType(AttachmentType::class)->onlyOnForms();
        yield DateTimeField::new('publishedAt', label: 'Date de publicaton');
        yield AssociationField::new('author', label: "Auteur de l'article");
        yield CollectionField::new('attachment')->setTemplatePath('pages/layout/image.html.twig')->onlyOnDetail();
    }
    
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, 'detail');
    }
}