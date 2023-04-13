<?php

namespace App\Controller;

use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\FormationType;
use App\Form\SearchType;
use App\Repository\FormationRepository;
use Doctrine\ORM\Repository\RepositoryFactory;

class FormationController extends AbstractController
{
    #[Route('/formation', name: 'app_formation')]
    public function index(): Response
    {
        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
        ]);
    }
    #[Route('/ajouter', name: 'app_formation_ajouter', methods: ["GET","POST"])]
    public function ajouter(Request $request, ManagerRegistry $doctrine): Response
    {
        $formation = new Formation();
        
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($formation);
            $em->flush();
        
            return $this->redirectToRoute('app_formation_read');
        }

        return $this->render('formation/add.html.twig', [
            'formation' => $form,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/read', name: 'app_formation_read')]
    public function read(ManagerRegistry $doctrine,FormationRepository $repository ): Response
    {
        
        $list = $repository->findByConfirmationTrue();
        return $this->render('formation/readlist.html.twig', [
            'formations' => $list,
        ]);
    }

    #[Route('/readlist', name: 'app_formation_readlist')]
    public function readlist(ManagerRegistry $doctrine,FormationRepository $repository ): Response
    {
        
        $list = $repository->findByConfirmationTrue();
        return $this->render('formation/read.html.twig', [
            'formations' => $list,
        ]);
    }
   


    #[Route('/delete/{id}', name: 'app_formation_delete')]
    public function delete(FormationRepository $repository,$id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $formation = $repository->find($id);
        $em->remove($formation);
        $em->flush();
        // update table (flush)
        return $this->redirectToRoute('app_formation_read');
    }

    #[Route('/update/{id}', name: 'app_formation_update')]
    public function update(
        FormationRepository $repository,
        $id,
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $em = $doctrine->getManager();
        $foundedformation = $repository->find($id);
        $formation = new Formation();

        $form = $this->createForm(FormationType::class, $foundedformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($foundedformation);
            $em->flush();
            return $this->redirectToRoute('app_formation_read');
        }
        return $this->renderForm('formation/update.html.twig', [
            'form' => $form,
        ]);    
    }



    #[Route('/search', name: 'app_formation_search')]
    public function searchBytitre(FormationRepository $repo, Request $request): Response
    { 
        $titre = $request->query->get('titre');

        $list = $repo->findByTitreAndConfirmationTrue($titre);
    
        return $this->render('formation/read.html.twig', [
            'formations' => $list,
        ]);
    }
    

    //backoffice
    #[Route('/formations', name: 'app_formation')]
    public function index2(): Response
    {
        return $this->render('formation/Admindachboard.html.twig', [
            'controller_name' => 'FormationController',
        ]);
    }


    #[Route('/ajouteradmin', name: 'app_formation_ajouteradmin', methods: ["GET","POST"])]
    public function ajouterback(Request $request, ManagerRegistry $doctrine): Response
    {
        $formation = new Formation();
        
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($formation);
            $em->flush();
        
            return $this->redirectToRoute('app_formation_readadmin');
        }

        return $this->render('formation/addAdmin.html.twig', [
            'formation' => $form,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/readadmin', name: 'app_formation_readadmin')]
    public function readadmin(ManagerRegistry $doctrine, FormationRepository $repository): Response
    {
     
        $list = $repository->findByConfirmationTrue();
        return $this->render('formation/readAdmin.html.twig', [
            'formations' => $list,
            
        ]);
    }

    #[Route('/deleteAdmin/{id}', name: 'app_formation_deleteadmin')]
    public function deleteback(FormationRepository $repository,$id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $formation = $repository->find($id);
        $em->remove($formation);
        $em->flush();
        // update table (flush)
        return $this->redirectToRoute('app_formation_readadmin', [
        
        ]);
    }
    #[Route('/updateadmin/{id}', name: 'app_formation_updateadmin')]
    public function updateback(
        FormationRepository $repository,
        $id,
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $em = $doctrine->getManager();
        $foundedformation = $repository->find($id);
        $formation = new Formation();

        $form = $this->createForm(FormationType::class, $foundedformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($foundedformation);
            $em->flush();
            return $this->redirectToRoute('app_formation_readadmin', [
        
            ]);
        }
        return $this->renderForm('formation/updateAdmin.html.twig', [
            'form' => $form,
        ]);    

    }
    #[Route('/searchadadmin', name: 'app_formation_searchadmin')]
    public function searchBytitreback(FormationRepository $repo, Request $request): Response
    { 
        $titre = $request->query->get('titre');
        $list1 = $repo->findByTitreAndConfirmationTrue2($titre);
        
        return $this->render('formation/readAdmin.html.twig', [
            'formations' => $list1,
        ]);
        
        
    }


    #[Route('/readadmin2', name: 'app_formation_readadmin2')]
    public function readadmin2(ManagerRegistry $doctrine, FormationRepository $repository): Response
    {
     
        $list = $repository->findByConfirmationfalse();
        #$lis = $repository->orderByid();
        return $this->render('formation/readAdmin22.html.twig', [
            'formations' => $list
        ]);
        return $this->redirectToRoute('app_formation_readadmin2');
    }

    #[Route('/accepter{id}', name: 'app_formation_accepter')]
    public function Accepter(ManagerRegistry $doctrine, FormationRepository $repository, $id): Response
    {
        $formation = $repository->find($id);
        $repository->accepterFormation($formation);

        return $this->redirectToRoute('app_formation_readadmin', [
        
        ]);
    }
        

}







