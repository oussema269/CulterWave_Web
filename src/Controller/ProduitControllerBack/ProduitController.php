<?php

namespace App\Controller\ProduitControllerBack;


use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;

#[Route('/produit')]
class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $produit = $entityManager
            ->getRepository(Produit::class)
            ->createQueryBuilder('p')
            ->leftJoin('p.categorie','c')
            ->AddSelect('c')
            ->getQuery()
            ->getResult();

        return $this->render('produit/index.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        
                $sid = "AC2e3e3f431567d6395601f5cc2dbb1e7a";
                $token = "a9cea865edee01c054dd2914a8586964";
                $twilio = new Client($sid, $token);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();

            $message = $twilio->messages
                  ->create("+21627865222", // to
                           ["body" => "un article a été ajouté", 
                           "from" =>"+16204989929"
                           ]
                  );
             print($message->sid);

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $sid = 'AC2e3e3f431567d6395601f5cc2dbb1e7a'; // Remplacez par votre SID Twilio
        $token = 'a9cea865edee01c054dd2914a8586964'; // Remplacez par votre Token Twilio
        $from = '+16204989929'; // Remplacez par votre numéro Twilio
        $to = '+21627865222'; // Remplacez par le numéro de téléphone du destinataire

$client = new Client($sid, $token);
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $message = $client->messages->create(
                $to, // Destinataire
                array(
                    'from' => $from, // Expéditeur
                    'body' => 'un article a été ajouté' // Corps du message
                )
               
            );
            print($message->sid);
            
            

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
}
