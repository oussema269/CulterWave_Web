<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponseuser')]
class ReponseuserController extends AbstractController
{
    #[Route('/', name: 'app_reponseuser_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reponses = $entityManager
            ->getRepository(Reponse::class)
            ->findAll();

        return $this->render('reponseuser/index.html.twig', [
            'reponses' => $reponses,
        ]);
    }

    #[Route('/new', name: 'app_reponseuser_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponseuser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponseuser/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{idreponse}', name: 'app_reponseuser_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponseuser/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{idreponse}/edit', name: 'app_reponseuser_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponseuser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponseuser/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{idreponse}', name: 'app_reponseuser_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getIdreponse(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponseuser_index', [], Response::HTTP_SEE_OTHER);
    }
}
