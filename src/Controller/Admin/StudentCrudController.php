<?php

namespace App\Controller\Admin;

use App\Entity\Student;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class StudentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Student::class;
    }

    public function configureFields(string $pageName): iterable
    {
        
        return [
            TextField::new('Class'),
            TextField::new('Name'),
            DateField::new('Birthday')->setFormat('yyyy.MM.dd'),
            ChoiceField::new('Gender')->allowMultipleChoices(false)->renderExpanded(true)->setChoices([
                'Male' => 'male',
                'Female' => 'female'
            ])
        ];
    }
}