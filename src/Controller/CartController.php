<?php

namespace App\Controller;
use App\Entity\Panier;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
   
    public function index( ManagerRegistry $doctrine): Response
    {
        $idUsercon=41;
        $entityManager=$doctrine->getManager();
        $panier = $entityManager->getRepository(Panier::class)->findBy([
            'idClient' => $idUsercon
        ]);
        $totalPrice = 0;

        foreach ($panier as $item) {
            $product = $item->getIdProduct();
            $quantity = $item->getQuantite();
            $totalPrice += $product->getPrix() * $quantity;
        }
        $count=count($panier);
    
        return $this->render('cart/cart.html.twig', [
            'controller_name' => 'CartController',
            'panier' => $panier,
            'total' => $totalPrice,
            'panier_count' => $count

        ]);
    }

    #[Route('/home', name: 'home')]
   
    public function count( ManagerRegistry $doctrine): Response
    {
        $idUsercon=41;
        $entityManager=$doctrine->getManager();
        $panier = $entityManager->getRepository(Panier::class)->findBy([
            'idClient' => $idUsercon
        ]);
        $count=count($panier);
    
        return $this->render('base.html.twig', [

            'panier_count' => $count

        ]);
    }

    #[Route('/cart/remove/{idpanier}',name:'delete_panier')]

    public function delete($idpanier,ManagerRegistry $doctrine) {
        $idUsercon=41;
        $entityManager=$doctrine->getManager();
        $panier = $entityManager->getRepository(Panier::class)->findOneBy([
            'idpanier' => $idpanier
        ]);
    
        $entityManager->remove($panier);
        $entityManager->flush();
    
        $response = new Response();
        $response->send();
        return $this->redirectToRoute('app_cart');
        } 


    #[Route('/cart/increment/{idProduit}',name:'increment_panier')]

    public function increment(ManagerRegistry $doctrine, $idProduit) {
        $idUsercon = 41;
       $entityManager=$doctrine->getManager();
        $paniers = $entityManager->getRepository(Panier::class)->findBy([
            'idClient' => $idUsercon,
            'idProduct' => $idProduit
        ]);
        $totalPrice = 0;

        foreach ($paniers as $panier) {
            $quantite = $panier->getQuantite();
                $panier->setQuantite($quantite + 1);
                $product = $panier->getIdProduct();
                $quantity = $panier->getQuantite();
                $totalPrice += $product->getPrix() * $quantity; 
                $panier->setTotale($totalPrice);             
                $entityManager->persist($panier);
                $entityManager->flush();
        }
        return $this->redirectToRoute('app_cart');
        }
        #[Route('/cart/decrement/{idProduit}',name:'decrement_panier')]

        public function decrement($idProduit,ManagerRegistry $doctrine) {
            $idUsercon = 41;
            $entityManager=$doctrine->getManager();
            $paniers = $entityManager->getRepository(Panier::class)->findBy([
                'idClient' => $idUsercon,
                'idProduct' => $idProduit
            ]); 
            $totalPrice = 0;
            foreach ($paniers as $panier) {
                $quantite = $panier->getQuantite();
                if ($quantite > 1) {
                    $panier->setQuantite($quantite - 1);
                    $product = $panier->getIdProduct();
                $quantity = $panier->getQuantite();
                $totalPrice += $product->getPrix() * $quantity; 
                $panier->setTotale($totalPrice); 
                    $entityManager->persist($panier);
                    $entityManager->flush();
                }
            }

        
            return $this->redirectToRoute('app_cart');
            }

}
