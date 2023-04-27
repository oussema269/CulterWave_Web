<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationformationRepository;
use Doctrine\ORM\EntityManagerInterface;

class ChartController extends AbstractController
{
    #[Route('/chart', name: 'app_chart')]
    public function index(ParticipationformationRepository $participationformationRepository): Response
    {
        $qb = $participationformationRepository->createQueryBuilder('p');
        $qb->select('f.titre as formation', 'COUNT(p.formations) as count')
            ->leftJoin('p.formations', 'f')
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
    }
}
