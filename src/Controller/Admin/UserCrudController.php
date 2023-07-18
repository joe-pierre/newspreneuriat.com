<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud 
        ->setPageTitle(Crud::PAGE_INDEX, 'Liste des utilisateurs')
        ->setPageTitle(Crud::PAGE_NEW, 'Créer un nouvel utilisateur')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        $roles = [
            'Utilisateur Simple' => 'ROLE_USER',
            'Administrateur' => 'ROLE_ADMIN',
            'Rédacteur' => 'ROLE_WRITER',
        ];

        yield TextField::new('Name', 'Nom');
        yield EmailField::new('email');
        yield TextField::new('plainPassword')->hideOnIndex();
        yield ChoiceField::new('roles')->setChoices($roles)->allowMultipleChoices()->renderAsBadges();
    }
   
}
