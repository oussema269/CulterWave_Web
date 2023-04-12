<?php

namespace App\Controller\ProduitControllerFront;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Entity\Produit;

class ProduitFontController extends AbstractController
{
    #[Route('/produitfont', name: 'app_produit_front')]
    public function index(): Response
    {
        $produit = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('produit_front/index.html.twig', [
            'controller_name' => 'ProduitFrontController',
            'produit' => $produit,
            'categories' => $categories,

        ]);
    }
}
