<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Participationformation;
use App\Repository\ParticipationformationRepository;
use App\Entity\Formation;
use App\Repository\FormationRepository;
use App\Form\ParticipationformationType;
use Symfony\Component\HttpFoundation\Request;





class ParticipationformationController extends AbstractController
{
    #[Route('/participationformation', name: 'app_participationformation')]
public function index(ParticipationformationRepository $participationformationRepository): Response
{
    return $this->render('participationformation/calendra.html.twig' );

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
    public function add(int $id, EntityManagerInterface $em, Request $request): Response
    {
        $formation = $em->getRepository(Formation::class)->find($id);
    
        $user = $this->getUser();
    
        $participation = new Participationformation();
        $participation->getFormations();
        $participation->setUser($user);
        $em->persist($participation);
        $em->flush();
    
        // Récupérer la date de début et de fin de la formation
        $debut = $formation->getDebut();
        $fin = $formation->getFin();
     
           
        return $this->redirectToRoute('app_formation_read', [
            'id' => $id,
            'debut' => $request->query->get('debut'),
            'fin' => $request->query->get('fin'),
        ]);
    }
    
    


    
   
}
