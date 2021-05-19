<?php

namespace App\Controller\Admin\Crud;

use App\Entity\ProfessionalExperiences;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfessionalExperiencesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProfessionalExperiences::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
