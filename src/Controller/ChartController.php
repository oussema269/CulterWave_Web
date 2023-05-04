<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationformationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ChartController extends AbstractController
{
    #[Route('/chart', name: 'app_chart')]
    public function index(ParticipationformationRepository $participationformationRepository, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $qb = $participationformationRepository->createQueryBuilder('p');
            $qb->select('f.titre as formation', 'COUNT(p.idformation) as count')
                ->leftJoin('p.idformation', 'f')
                ->groupBy('f')
                ->orderBy('count', 'DESC')
                ->setMaxResults(10000);

            $results = $qb->getQuery()->getResult();

            // Créer les tableaux pour les données du graphique
            $formationNames = [];
            $formationCounts = [];
            foreach ($results as $result) {
                $formationNames[] = $result['formation'];
                $formationCounts[] = $result['count'];
            }
            return $this->render('chart/chart.html.twig', [
                'formationNames' => json_encode($formationNames),
                'formationCounts' => json_encode($formationCounts),
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
}
