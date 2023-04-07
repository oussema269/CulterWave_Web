<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    public function index(\Doctrine\Persistence\ManagerRegistry $doctrine): Response
    {
        $idUsercon=41;
        $entityManager=$doctrine->getManager();
        $user = $entityManager->getRepository(User::class)->findBy([
            'id' => $idUsercon
        ]);
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
        foreach ($user as $item) {
            $idc=$item->getId();
            $nom=$item->getNom();
            $prenom=$item->getPrenom();
            $email=$item->getEmail();
            
        }



        return $this->render('checkout/checkout.html.twig', [
            'idClient' => $idc,
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'totale'=>$totalPrice,
            'panier'=>$panier
        ]);
    }
}
