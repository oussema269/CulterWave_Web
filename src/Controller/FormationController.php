<?php

namespace App\Controller;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Entity\Formation;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\FormationType;
use App\Form\SearchType;
use App\Repository\FormationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/formation')]

class FormationController extends AbstractController
{
    #[Route('/formationtest', name: 'app_formation')]
    public function index(SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            return $this->render('formation/index.html.twig', [
                'controller_name' => 'FormationController',
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/ajouter', name: 'app_formation_ajouter', methods: ["GET", "POST"])]
    public function ajouter(Request $request, ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $formation = new Formation();


            $form = $this->createForm(FormationType::class, $formation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user1 = new User();
                $serializedObject = $session->get('user1');
                $user1 = unserialize($serializedObject);

                $formation->setConfirmation(false);
                $em = $doctrine->getManager();
                $em->persist($formation);
                $em->flush();

                return $this->redirectToRoute('app_formation_read');
            }

            return $this->render('formation/add.html.twig', [
                'formation' => $form, 
                'form' => $form->createView(),
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/read', name: 'app_formation_read')]
    public function read(ManagerRegistry $doctrine, FormationRepository $repository, PaginatorInterface $paginator, Request $request, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {


            $pagination = $paginator->paginate(
                $repository->findByConfirmationTrue(),
                $request->query->get('page', 1),
                5

            );
            return $this->render('formation/readlist.html.twig', [

                'formations' => $pagination,
                'pagination' => $pagination,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/readlist', name: 'app_formation_readlist')]
    public function readlist(ManagerRegistry $doctrine, SessionInterface $session, FormationRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $user = unserialize($serializedObject);

            $pagination = $paginator->paginate(
                $repository->findBy([
                    'ownerid' => $user->getId(),
                    'confirmation' => true,
                ]),

                $request->query->get('page', 1),
                5

            );
            return $this->render('formation/read.html.twig', [
                'formations' => $pagination,
                'pagination' => $pagination
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }



    #[Route('/delete/{id}', name: 'app_formation_delete')]
    public function delete(
        FormationRepository $repository,
        $id,
        SessionInterface $session,
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
    public function searchBytitre(FormationRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $titre = $request->query->get('titre');

        $list = $repo->findByTitreAndConfirmationTrue($titre);

        $pagination = $paginator->paginate(
            $list,
            $request->query->getInt('page', 1), // page number
            5 // limit per page
        );

        return $this->render('formation/readlist.html.twig', [
            'formations' => $pagination,
            'pagination' => $pagination

        ]);
    }

    #[Route('/formation/tri/date', name: 'app_formation_tri_date')]
    public function triParDate(FormationRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $formations = $repo->findSortedByDate();

        $pagination = $paginator->paginate(
            $formations,
            $request->query->getInt('page', 1), // page number
            5 // limit per page
        );

        return $this->render('formation/readlist.html.twig', [
            'formations' => $pagination,
            'pagination' => $pagination
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


    #[Route('/ajouteradmin', name: 'app_formation_ajouteradmin', methods: ["GET", "POST"])]
    public function ajouterback(Request $request, ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $user1 = unserialize($serializedObject);
            $formation = new Formation();

            $form = $this->createForm(FormationType::class, $formation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $formation->setConfirmation('false');
                $formation->setOwnerid($user1);

                $em = $doctrine->getManager();
                $em->persist($formation);
                $em->flush();

                return $this->redirectToRoute('app_formation_readadmin');
            }

            return $this->render('formation/addAdmin.html.twig', [
                'formation' => $form,
                'form' => $form->createView(),
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }


    #[Route('/readadmin', name: 'app_formation_readadmin')]
    public function readadmin(ManagerRegistry $doctrine, FormationRepository $repository, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {

            $list = $repository->findByConfirmationTrue();
            return $this->render('formation/readAdmin.html.twig', [
                'formations' => $list,

            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/deleteAdmin/{id}', name: 'app_formation_deleteadmin')]
    public function deleteback(
        FormationRepository $repository,
        $id,
        ManagerRegistry $doctrine
    ): Response {
        $em = $doctrine->getManager();
        $formation = $repository->find($id);
        $em->remove($formation);
        $em->flush();
        // update table (flush)
        return $this->redirectToRoute('app_formation_readadmin', []);
    }
    #[Route('/updateadmin/{id}', name: 'app_formation_updateadmin')]
    public function updateback(FormationRepository $repository, $id, ManagerRegistry $doctrine, Request $request): Response
    {
        $em = $doctrine->getManager();
        $foundedformation = $repository->find($id);
        $formation = new Formation();

        $form = $this->createForm(FormationType::class, $foundedformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($foundedformation);
            $em->flush();
            return $this->redirectToRoute('app_formation_readadmin');
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
    public function readadmin2(ManagerRegistry $doctrine, FormationRepository $repository, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {

            $list = $repository->findByConfirmationfalse();
            #$lis = $repository->orderByid();
            return $this->render('formation/readAdmin22.html.twig', [
                'formations' => $list
            ]);
            return $this->redirectToRoute('app_formation_readadmin2');
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/accepter{id}', name: 'app_formation_accepter')]
    public function Accepter(ManagerRegistry $doctrine, FormationRepository $repository, $id): Response
    {
        $formation = $repository->find($id);
        $repository->accepterFormation($formation);

        return $this->redirectToRoute('app_formation_readadmin', []);
    }

    #[Route('/ajouterJson', name:"ajouterJson")]
    public function ajouterFormation(Request $request, NormalizerInterface $Normalizer): JsonResponse
    {
  
        
        $formation = new Formation();
        $formation->setTitre($request->get('titre'));
        $formation->setDescription($request->get('description'));
        $formation->setType($request->get('type'));
        $formation->setPays($request->get('pays'));
        $debut = DateTime::createFromFormat('d/m/Y', $request->get('debut'))->format('Y-m-d H:i:s');
        $formation->setDebut(new DateTime($debut));

        $fin = DateTime::createFromFormat('d/m/Y', $request->get('fin'))->format('Y-m-d H:i:s');
        $formation->setFin(new DateTime($fin));

        

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($formation);
        $entityManager->flush();

        $jsoncontent = $Normalizer->normalize($formation, 'json',['groups' =>'formation']);
        
        return new JsonResponse(json_encode($jsoncontent) );
    }
    
    
  
    
    
    #[Route('/readJson', name: 'app_formation_readJson')]
    public function readJson(ManagerRegistry $doctrine,FormationRepository $repository , PaginatorInterface $paginator ,Request $request, NormalizerInterface $normalizer): Response
    {
        
        
        $pagination = $paginator->paginate(
        $repository-> findByConfirmationTrue(),
        $request->query->get('page',1),5

        );
        $formations = $pagination->getItems();
        $formationsNormalises = $normalizer->normalize($formations, 'json', ['groups' => 'formation']);

        return $this->json($formationsNormalises);

    }


    
    #[Route('/UpdateJson/{id}', name:"updateJson")]
    public function upadateJson(Request $req, $id, NormalizerInterface $Normalizer){
        $em = $this->getDoctrine()->getManager();
        $formations = $em->getRepository(Formation::class)->find($id);
        $formations->setTitre($req->get('titre'));
        $formations->setDescription($req->get('description'));
        $formations->setType($req->get('type'));
        $formations->setPays($req->get('pays'));
        $formations->setDebut(new DateTime($req->get('debut')));
        $formations->setFin(new DateTime($req->get('fin')));
        
        $em->flush();

        $jsoncontent = $Normalizer->normalize($formations,'json',['groups'=>'formation']);
        return new JsonResponse("Formation modifier " . json_encode($jsoncontent));

    } 

    #[Route('/deleteJson/{id}', name:"deletejson")]
    public function deleteJson(Request $reqe,$id,NormalizerInterface $Normalizer){
        $em = $this->getDoctrine()->getManager();
        $formationss = $em->getRepository(Formation::class)->find($id);
        $em->remove($formationss);
        $em->flush();
        $jsonContent = $Normalizer->normalize($formationss,'json', ['groups'=>'formation']);
        return new JsonResponse("Formation supprime" .json_encode($jsonContent));
    }

}
