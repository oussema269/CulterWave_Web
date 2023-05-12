<?php

namespace App\Controller\ProduitControllerFront;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Entity\Produit;
use App\Model\SearchData;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProduitRepository;
use App\Entity\Panier;
use App\Entity\User;


class ProduitFontController extends AbstractController
{
    #[Route('/produitfont', name: 'app_produit_front')]
    public function index(Request $request, PaginatorInterface $paginator, ProduitRepository $produitRepository, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $SearchData = new SearchData();
            $form = $this->createForm(SearchType::class, $SearchData);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $SearchData->page = $request->query->getInt('page', 1);
                $produits = $produitRepository->findBySearch($SearchData);
                // dd($produits);


                return $this->render('produit_front/index.html.twig', [
                    'form' => $form->createView(),
                    'produit' => $produits
                ]);
            }

            $article = $this->getDoctrine()->getRepository(Produit::class)->findAll();
            $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

            $produit = $paginator->paginate(
                $article,
                $request->query->getInt('page', 1),
                3
            );

            return $this->render('produit_front/index.html.twig', [
                'controller_name' => 'ProduitFrontController',
                'produit' => $produit,
                'categories' => $categories,
                'form' => $form->createView(),
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/addProduit/{idProduit}', name: 'app_produit')]
    public function add(\Doctrine\Persistence\ManagerRegistry $doctrine, $idProduit, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $user1 = new User();
            $serializedObject = $session->get('user1');
            $user1 = unserialize($serializedObject);


            $entityManager = $doctrine->getManager();
            $utilisateur = $entityManager->getRepository(User::class)->find($user1->getId());
            $produit = $entityManager->getRepository(Produit::class)->find($idProduit);
            // Create a new Basket entity
            $panier = $entityManager->getRepository(Panier::class)->findOneBy([
                'idClient' => $user1->getId(),
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
            $panier->setTotale($panier->getQuantite() * $panier->getIdProduct()->getPrix());


            // Persist the entity to the database
            $entityManager->persist($panier);
            $entityManager->flush();

            // Return a response to indicate success
            return $this->redirectToRoute('app_produit_front');
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
}
