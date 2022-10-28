<?php

namespace App\Controller\Admin;

use App\Entity\Membres;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MembresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Membres::class;
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
