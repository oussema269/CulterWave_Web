<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

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




#[Route('/particpe')]

class ParticipationformationController extends AbstractController
{
    #[Route('/participationformation', name: 'app_participationformation')]
    public function index(ParticipationformationRepository $participationformationRepository): Response
    {
        return $this->render('participationformation/calendra.html.twig');
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
    public function add(int $id, EntityManagerInterface $em, SessionInterface $session): Response
    {
        $formation = $em->getRepository(Formation::class)->find($id);
        $serializedObject = $session->get('user1');
        // Unserialize the object to get the User instance
        $user1 = unserialize($serializedObject);

        // $user = $this->getUser();

        $participation = new Participationformation();
        $participation->setFormation($formation);
        $participation->setIduser($user1);

        //$participation->setIduser(38);
        $em->persist($participation);
        $em->flush();

        // Récupérer la date de début et de fin de la formation
        $dateDebut = $formation->getDebut();
        $dateFin = $formation->getFin();


        return $this->redirectToRoute('app_formation_read', ['debut' => $dateDebut, 'fin' => $dateFin]);
    }
}
