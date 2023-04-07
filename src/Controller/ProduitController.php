<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\User;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
   
    
    public function add(\Doctrine\Persistence\ManagerRegistry $doctrine): Response
    {
        $entityManager=$doctrine->getManager();
        $utilisateur = $entityManager->getRepository(User::class)->find(41);
        $produit = $entityManager->getRepository(Produit::class)->find(39);
        // Create a new Basket entity
        $panier = $entityManager->getRepository(Panier::class)->findOneBy([
            'idClient' => $utilisateur,
            'idProduct' => $produit
        ]);
    
        if ($panier) {
            // If the product is already in the cart, increment the quantity
            $quantite = $panier->getQuantite();
            $panier->setQuantite($quantite + 1);
        } else {
            // If the product is not in the cart, create a new Basket entity with quantity = 1
            $panier = new Panier();
            $panier->setIdClient($utilisateur);
            $panier->setIdProduct($produit);
            $panier->setQuantite(1);

        }
        $panier->setTotale($panier->getQuantite()*$panier->getIdProduct()->getPrix());
        

        // Persist the entity to the database
        $entityManager->persist($panier);
        $entityManager->flush();

        // Return a response to indicate success
        return new Response('Basket entity created successfully');
    }
}
