<?php

namespace App\Controller\Admin;

use App\Entity\Conctacts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConctactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conctacts::class;
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
