<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendraController extends AbstractController
{
    #[Route('/calendra', name: 'app_calendra')]
    public function index(): Response
    {
        return $this->render('calendra/calendra.html.twig', [
            'controller_name' => 'CalendraController',
        ]);
    }
}
