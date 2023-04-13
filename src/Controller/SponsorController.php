<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class SponsorController extends AbstractController
{
    #[Route('/sponsor', name: 'app_sponsor')]
    public function index(): Response
    {
        return $this->render('sponsor/sponsor.html.twig', [
            'controller_name' => 'SponsorController',
        ]);
    }

    #[Route('/afficher', name: 'app_afficher')]
    public function read2(SponsorRepository $repository): Response
    {
        $list = $repository->findAll();
        return $this->render('sponsor/afficher.html.twig', [
            'form' => $list,
        ]);
    }

    #[Route('/rechercherr', name: 'app_liste_ordonneeee')]
    public function listOrdonner(Request $request, SponsorRepository $repo): Response
    {
        $nom = $request->query->get('nom');
        $list = $repo->findByTitre($nom);
        return $this->render('sponsor/afficher.html.twig', [
            'form' => $list,
        ]);
    }
  
    #[Route('/deleteee/{id}', name: 'app_sponsor_delete')]
    public function deletee(
        SponsorRepository $repository,
        $id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $sponsor = $repository->find($id);
        if (!$sponsor) {
            throw $this->createNotFoundException('Sponsor not found for id ' . $id);
        }
        $em->remove($sponsor);
        $em->flush();
        $this->addFlash('success', 'Delete avec succès');

        return $this->redirectToRoute('app_afficher');
    }
    
    

   #[Route('/add', name: 'app_sponsor_create')]
   public function create(
       ManagerRegistry $doctrine,
       Request $request,
       SponsorRepository $sponsorRepository,
   ): Response {
       $sponsor = new Sponsor();
       // createForm => créer le formulaire construit dans le buildForm (classroomType)
       $form = $this->createForm(SponsorType::class, $sponsor);
       $form->handleRequest($request);
       // traiter la requete reçu (handleRequest)
       if ($form->isSubmitted() && $form->isValid()) {
        
        $errors = $form->getErrors(true, false);
        $em = $this->getDoctrine()->getManager();
           // $classroomRepository->save($classroom, true);
           $em->persist($sponsor);
           $em->flush();
           $this->addFlash('success', 'Ajout avec succès');
           return $this->redirectToRoute('app_afficher');
           
       }
       return $this->renderForm('sponsor/add.html.twig', [
           'form' => $form,
       ]);
   }

   #[Route('/modifier/{id}', name: 'app_sponsor_edit')]
   public function edit(
    SponsorRepository $repository,
       $id,
       ManagerRegistry $doctrine,
       Request $request
   ): Response {
       $em = $doctrine->getManager();
       $foundedevennement = $repository->find($id);
       $sponsor = new Sponsor();
       // createForm => créer le formulaire construit dans le buildForm (classroomType)
       $form = $this->createForm(SponsorType::class, $foundedevennement);
       $form->handleRequest($request);
       // $form->add('modifier', SubmitType::class);
       // traiter la requete reçu (handleRequest)
       if ($form->isSubmitted() && $form->isValid()) {
           $em = $doctrine->getManager();
           // $classroomRepository->save($classroom, true);
           $em->persist($foundedevennement);
           $em->flush();
           return $this->redirectToRoute('app_afficher');
       }
       return $this->renderForm('sponsor/modifier.html.twig', [
           'form' => $form,
       ]);    
   }
}
