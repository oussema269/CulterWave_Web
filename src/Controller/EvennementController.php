<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Entity\Evennement;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EvennementType;
use App\Repository\EvennementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use App\Entity\Rating;
use App\Form\RatingType;
use App\Repository\RatingRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class EvennementController extends AbstractController
{
    //backoffice
    #[Route('/nom', name: 'app_home')]
    public function index(SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            return $this->render('evennement/index.html.twig', [
                'controller_name' => 'EvennementController',
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/read', name: 'app_read2')]
    public function read2(EvennementRepository $repository, PaginatorInterface $paginator, Request $request, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {

            $pagination = $paginator->paginate(
                $repository->paginationqu(),
                $request->query->get('page', 1),
                4


            );

            return $this->render('evennement/read1.html.twig', [
                'form' => $pagination,
                'pagination' => $pagination,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }


    #[Route('/readadmin', name: 'app_readadmin')]
    public function read(EvennementRepository $repository, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $list = $repository->findAll();
            return $this->render('evennement/afficheradmin.html.twig', [
                'form' => $list,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }




    #[Route('/rechercheadmin', name: 'app_liste_ordonne')]
    public function listOrdonne(Request $request, EvennementRepository $repo, PaginatorInterface $paginator): Response
    {

        $nom = $request->query->get('nom');
        $list = $repo->findByTitre($nom);

        return $this->render('evennement/afficheradmin.html.twig', [
            'form' => $list,
        ]);
    }



    #[Route('/recherche', name: 'app_liste_ordonnee')]
    public function listOrdonnee(EvennementRepository $repository, Request $request, EvennementRepository $repo, PaginatorInterface $paginator): Response
    {
        $nom = $request->query->get('nom');
        $list = $repo->findByTitre($nom);
        $pagination = $paginator->paginate(
            $list,
            $request->query->getInt('page', 1),
        );

        return $this->render('evennement/read1.html.twig', [
            'form' => $pagination,
            'pagination' => $pagination,
        ]);
    }






    #[Route('/participer', name: 'app_participer')]
    public function participerEvennement(Request $request, $evennementId, $userId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($userId);
        $evennement = $entityManager->getRepository(Evennement::class)->find($evennementId);

        if (!$user || !$evennement) {
            throw $this->createNotFoundException('Utilisateur ou événement non trouvé.');
        }

        $evennement->addParticipant($user);

        $entityManager->persist($evennement);
        $entityManager->flush();

        return new Response('Vous avez bien participé à l\'événement.');
    }



    #[Route('/participerr/{id}', name: 'app_part')]
    #[ParamConverter('evennement', class: 'App\Entity\Evennement', options: ['id' => 'id'])]
    public function participer($id)
    {
        // Récupérer l'utilisateur actuellement connecté
        $user = $this->getUser();

        // Récupérer l'événement correspondant à l'id fourni
        $evennement = $this->getDoctrine()->getRepository(Evennement::class)->find($id);

        // Ajouter l'utilisateur à la liste des participants de l'événement
        $evennement->app_event_createadmin($user);

        // Enregistrer les modifications dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evennement);
        $entityManager->flush();

        // Rediriger l'utilisateur vers la page de détails de l'événement
        return $this->redirectToRoute('app_read2', ['id' => $id]);
    }



    #[Route('/createadmin', name: 'app_event_createadmin')]
    public function createe(
        ManagerRegistry $doctrine,
        Request $request,
        EvennementRepository $evennementRepository,
        ValidatorInterface $validator
    ): Response {
        $evennement = new Evennement();
        // createForm => créer le formulaire construit dans le buildForm (classroomType)
        $form = $this->createForm(EvennementType::class, $evennement);
        $form->handleRequest($request);
        // traiter la requete reçu (handleRequest)
        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($evennement);


            $em = $this->getDoctrine()->getManager();
            // $classroomRepository->save($classroom, true);
            $em->persist($evennement);
            $em->flush();
            $this->addFlash('success', 'Ajout avec succès');



            return $this->redirectToRoute('app_readadmin');
        }
        return $this->renderForm('evennement/addadmin.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/create', name: 'app_event_create')]
    public function create(
        ManagerRegistry $doctrine,
        Request $request,
        EvennementRepository $evennementRepository,
    ): Response {
        $evennement = new Evennement();
        // createForm => créer le formulaire construit dans le buildForm (classroomType)
        $form = $this->createForm(EvennementType::class, $evennement);
        $form->handleRequest($request);
        // traiter la requete reçu (handleRequest)
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // $classroomRepository->save($classroom, true);
            $em->persist($evennement);
            $em->flush();
            return $this->redirectToRoute('app_read2');
        }
        return $this->renderForm('evennement/add.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/evennement/{id}/note', name: 'app_rate_create')]
    public function rate(Evennement $evennement, Request $request, EntityManagerInterface $em, RatingRepository $ratingRepository)
    {
        $newRating = new Rating();
        $form = $this->createForm(RatingType::class, $newRating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newRating->setEvennement($evennement);
            $em->persist($newRating);
            $em->flush();

            $this->addFlash('success', 'Votre note a été ajoutée avec succès !');

            return $this->redirectToRoute('app_read2');
        }

        return $this->render('evennement/rate.html.twig', [
            'form' => $form->createView(),
            'evennement' => $evennement,
        ]);
    }


    #[Route('/delete/{id}', name: 'app_event_delete')]
    public function delete(
        EvennementRepository $repository,
        $id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $evennement = $repository->find($id);
        $em->remove($evennement);
        $em->flush();
        $this->addFlash('success', 'Ajout avec succès');

        // update table (flush)
        return $this->redirectToRoute('app_read2');
    }

    #[Route('/deleteadmin/{id}', name: 'app_event_deleteadmin')]
    public function deletee(
        EvennementRepository $repository,
        $id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $evennement = $repository->find($id);
        $em->remove($evennement);
        $em->flush();
        // update table (flush)
        $this->addFlash('success', 'delet avec succès');
        return $this->redirectToRoute('app_readadmin');
    }

    #[Route('/editadmin/{id}', name: 'app_evennement_editadmin')]
    public function editt(
        EvennementRepository $repository,
        $id,
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $em = $doctrine->getManager();
        $foundedevennement = $repository->find($id);
        $evennement = new Evennement();
        // createForm => créer le formulaire construit dans le buildForm (classroomType)
        $form = $this->createForm(EvennementType::class, $foundedevennement);
        $form->handleRequest($request);
        // $form->add('modifier', SubmitType::class);
        // traiter la requete reçu (handleRequest)
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            // $classroomRepository->save($classroom, true);
            $em->persist($foundedevennement);
            $em->flush();
            $this->addFlash('success', 'Modification avec succès');
            return $this->redirectToRoute('app_readadmin');
        }
        return $this->renderForm('evennement/editadmin.html.twig', [
            'form' => $form,
        ]);
    }




    #[Route('/edit/{id}', name: 'app_evennement_edit')]
    public function edit(
        EvennementRepository $repository,
        $id,
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $em = $doctrine->getManager();
        $foundedevennement = $repository->find($id);
        $evennement = new Evennement();
        // createForm => créer le formulaire construit dans le buildForm (classroomType)
        $form = $this->createForm(EvennementType::class, $foundedevennement);
        $form->handleRequest($request);
        // $form->add('modifier', SubmitType::class);
        // traiter la requete reçu (handleRequest)
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            // $classroomRepository->save($classroom, true);
            $em->persist($foundedevennement);
            $em->flush();
            return $this->redirectToRoute('app_read2');
        }
        return $this->renderForm('evennement/edit.html.twig', [
            'form' => $form,
        ]);
    }
}
