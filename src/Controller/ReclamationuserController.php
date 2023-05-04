<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ReclamationRepository;

#[Route('/reclamationuser')]
class ReclamationuserController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }




    #[Route('/', name: 'app_reclamationuser_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session, ReclamationRepository $reclamationRepository): Response
    {
        $ser = $session->get('user1');
        // Unserialize the object to get the User instance
        $user = unserialize($ser);
        /*
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();*/
        $reclamations = $reclamationRepository->findReclamationsForUser($user->getId());



        return $this->render('reclamationuser/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamationuser_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();
        $ser = $session->get('user1');
        $user = unserialize($ser);
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'users' => $users,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setIdReclamateur($user);

            //$reclamation->setIdciblereclamation($form->get('idciblereclamation')->getData());
            // ...

            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamationuser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamationuser/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idreclamation}', name: 'app_reclamationuser_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager, $idreclamation): Response
    {
        $reclamation = $entityManager
            ->getRepository(Reclamation::class)
            ->find($idreclamation);
        return $this->render('reclamationuser/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idreclamation}/edit', name: 'app_reclamationuser_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamationuser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamationuser/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idreclamation}', name: 'app_reclamationuser_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reclamation->getIdreclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamationuser_index', [], Response::HTTP_SEE_OTHER);
    }
}
