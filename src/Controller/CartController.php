<?php

namespace App\Controller;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use App\Entity\Panier;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]

    public function index(ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $idUsercon = 49;
            $serializedObject = $session->get('user1');
            $user1 = unserialize($serializedObject);
            $entityManager = $doctrine->getManager();
            $panier = $entityManager->getRepository(Panier::class)->findBy([
                'idClient' => $user1
            ]);
            $totalPrice = 0;

            foreach ($panier as $item) {
                $product = $item->getIdProduct();
                $quantity = $item->getQuantite();
                $totalPrice += $product->getPrix() * $quantity;
            }
            $count = count($panier);

            return $this->render('cart/cart.html.twig', [
                'controller_name' => 'CartController',
                'panier' => $panier,
                'total' => $totalPrice,
                'panier_count' => $count

            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/home', name: 'home')]

    public function count(ManagerRegistry $doctrine, SessionInterface $session): Response
    {
       
            

        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $user1 = new User();
            $serializedObject = $session->get('user1');
            $user1 = unserialize($serializedObject);
            $entityManager = $doctrine->getManager();
            $panier = $entityManager->getRepository(Panier::class)->findBy([
                'idClient' => $user1
            ]);
            $count = count($panier);

            return $this->render('base.html.twig', [

                'panier_count' => $count

            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/cart/remove/{idpanier}', name: 'delete_panier')]

    public function delete($idpanier, ManagerRegistry $doctrine, SessionInterface $session)
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $idUsercon = 49;
            $entityManager = $doctrine->getManager();
            $panier = $entityManager->getRepository(Panier::class)->findOneBy([
                'idpanier' => $idpanier
            ]);

            $entityManager->remove($panier);
            $entityManager->flush();
            
            $response = new Response();
            $response->send();
            return $this->redirectToRoute('app_cart');
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }


    #[Route('/cart/increment/{idProduit}', name: 'increment_panier')]

    public function increment(ManagerRegistry $doctrine, $idProduit, SessionInterface $session)
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $user1 = new User();
            $serializedObject = $session->get('user1');
            $user1 = unserialize($serializedObject);
            $entityManager = $doctrine->getManager();
            $paniers = $entityManager->getRepository(Panier::class)->findBy([
                'idClient' => $user1,
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
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/cart/decrement/{idProduit}', name: 'decrement_panier')]

    public function decrement($idProduit, ManagerRegistry $doctrine, SessionInterface $session)
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $idUsercon = 49;
            $user1 = new User();
            $serializedObject = $session->get('user1');
            $user1 = unserialize($serializedObject);
            $entityManager = $doctrine->getManager();
            $paniers = $entityManager->getRepository(Panier::class)->findBy([
                'idClient' => $user1,
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
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
}
