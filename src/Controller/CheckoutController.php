<?php

namespace App\Controller;
use App\Entity\Commande;
use App\Entity\User;
use App\Entity\Panier;
use App\Form\AjouterCommandeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTimeImmutable;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    public function index(\Doctrine\Persistence\ManagerRegistry $doctrine , Request $request): Response
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
        $user = $entityManager->getRepository(User::class)->find($idUsercon); 
 
        $form = $this->createForm(AjouterCommandeType::class);
        $form->handleRequest($request);
              
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $commande=new Commande();
            $commande->setDate(new DateTimeImmutable());
            $commande->setIdClient($user);
            $commande->setTotale($totalPrice );
            $commande->setEtat(0);
            $entityManager->persist($commande);
            $entityManager->flush();
            
        }

        return $this->render('checkout/checkout.html.twig', [
            'idClient' => $idc,
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'totale'=>$totalPrice,
            'panier'=>$panier,
            'form' => $form->createView(),
        ]);
    }
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
   

    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('confirmation.html.twig');
    }
}

