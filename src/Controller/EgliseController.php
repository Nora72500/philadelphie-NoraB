<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EgliseController extends AbstractController
{
    #[Route('/eglise', name: 'eglise.index')]
    public function index(): Response
    {
        return $this->render('eglise/index.html.twig', [
            'controller_name' => 'EgliseController',
        ]);
    }
}
