<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Repository\ReponseRepository;
#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    
    private $entityManager;
    private $reponseRepository;

    public function __construct(EntityManagerInterface $entityManager, ReponseRepository $reponseRepository)
    {
        $this->entityManager = $entityManager;
        $this->reponseRepository = $reponseRepository;
    }
    
    
    
    
    
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $x = $reclamation -> getIdciblereclamation();
       




        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();
            
            $queryBuilder = $this->entityManager->createQueryBuilder(); // requete sql pour selectionner le createur de projet
            $email = $queryBuilder // on vas prendre le email de l'utilisateur
                ->select('u.mail')
                ->from(User::class, 'u')
                ->where('u.idUser = :idUser')
                ->setParameter('idUser', $x)
                ->getQuery()
                ->getSingleScalarResult();
                $queryBuilder = $this->entityManager->createQueryBuilder();
          $nom = $queryBuilder
    ->select('u1.nom')
    ->from(User::class, 'u1')
    ->where('u1.idUser = :userId')
    ->setParameter('userId', $x)
    ->getQuery()
    ->getSingleScalarResult();


    $mail = new PHPMailer(true);
    try {
        // set up the SMTP connection
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'culturewave3a24@outlook.com';
        $mail->Password = '21933005@r';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        // set up the email message
        $mail->setFrom('culturewave3a24@outlook.com', 'Rayen khalfaoui');
        $mail->addAddress($email);
        $mail->Subject = 'Projet';
        $mail->Body ='bonjour '. $nom  . ' un reclamation a etait fait vers vous ' ;
        
        // send the email
        $mail->send();
        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo 'Email could not be sent. Error message: ', $mail->ErrorInfo;
    }



            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idreclamation}', name: 'app_reclamation_show', methods: ['GET'])]
public function show(Reclamation $reclamation, ReponseRepository $reponseRepository): Response
{
    $reponse = $reponseRepository->findOneBy(['idreclamation' => $reclamation->getIdreclamation()]);

    return $this->render('reclamation/show.html.twig', [
        'reclamation' => $reclamation,
        'reponse' => $reponse,
    ]);
}


    #[Route('/{idreclamation}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idreclamation}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdreclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
