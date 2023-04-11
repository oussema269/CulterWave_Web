<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Participationformation;
use App\Entity\Formation;
use App\Form\ParticipationformationType;
use Symfony\Component\HttpFoundation\Request;



class ParticipationformationController extends AbstractController
{
    #[Route('/participationformation', name: 'app_participationformation')]
    public function index(): Response
    {
        return $this->render('participationformation/index.html.twig', [
            'controller_name' => 'ParticipationformationController',
        ]);
    }

   // #[Route('/participationformation/read', name: 'app_formation_read')]
    //public function read(ManagerRegistry $doctrine): Response
    //{
      //  $repository = $doctrine->getRepository(Formation::class);
       // $list = $repository->findAll();
       // return $this->render('participationformation/read.html.twig', [
         //   'formations' => $list,
        //]);
    //}
    #[Route('/add/{id}', name: 'app_participationformation_add', methods: ["GET"])]
    public function add(int $id, EntityManagerInterface $em): Response
    {

        $formation = $em->getRepository(Formation::class)->find($id);
    
        $user = $this->getUser();
    
        
        $participation = new Participationformation();
        $participation->setFormations($formation);
        $participation->setUser($user);
    

        $em->persist($participation);
        $em->flush();
    

        return $this->redirectToRoute('app_formation_readadmin');
    }
    
   
}
