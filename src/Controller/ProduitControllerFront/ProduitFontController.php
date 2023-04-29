<?php

namespace App\Controller\ProduitControllerFront;

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

class ProduitFontController extends AbstractController
{
    #[Route('/produitfont', name: 'app_produit_front')]
    public function index(Request $request, PaginatorInterface $paginator, ProduitRepository $produitRepository): Response
    {
        $SearchData=new SearchData();
        $form=$this->createForm(SearchType::class,$SearchData);
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

        $produit=$paginator->paginate(
            $article,
            $request->query->getInt('page',1),
            3
        );

        return $this->render('produit_front/index.html.twig', [
            'controller_name' => 'ProduitFrontController',
            'produit' => $produit,
            'categories' => $categories,
            'form'=>$form->createView(),
        ]);
    }
}
