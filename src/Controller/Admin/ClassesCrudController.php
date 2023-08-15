<?php

namespace App\Controller\Admin;

use App\Entity\Classes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
class ClassesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Classes::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('School'),
            TextField::new('Name'),
            ChoiceField::new('Year')->setChoices([
                '1st Year' => 'first Year',
                '2nd Year' => 'second year',
                '3rd Year' => 'third year',
                '4th Year' => 'fourth year'
            ]),
        ];
    }
}