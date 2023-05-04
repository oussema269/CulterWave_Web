<?php

namespace App\Controller;

use App\Entity\Commande;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(CommandeRepository $repository, Request $request, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $list = $repository->findAll();
            $count = count($list);
            return $this->render('commande/commande.html.twig', [
                'controller_name' => 'CommandeController',
                'list' => $list,
                'count' => $count
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/commande/remove/{idc}', name: 'delete_commande')]

    public function delete($idc, ManagerRegistry $doctrine, SessionInterface $session)
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $entityManager = $doctrine->getManager();
            $commande = $entityManager->getRepository(Commande::class)->findOneBy([
                'idc' => $idc
            ]);


            if ($commande) {
                $entityManager->remove($commande);
                $entityManager->flush();
            }
            $response = new Response();
            $response->send();
            return $this->redirectToRoute('app_commande');
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/commande/modifier/{idc}', name: 'modifier_commande')]

    public function modifierEtat($idc, ManagerRegistry $doctrine, SessionInterface $session)
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $entityManager = $doctrine->getManager();
            $commande = $entityManager->getRepository(Commande::class)->findOneBy([
                'idc' => $idc
            ]);
            $commande->setEtat(1);
            $entityManager->persist($commande);
            $entityManager->flush();
            return $this->redirectToRoute('app_commande');
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/trier', name: 'trier')]

    public function Trier(CommandeRepository $repository, Request $request, ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $list = $repository->findAll();
            $count = count($list);
            $entityManager = $doctrine->getManager();
            $dql = 'SELECT c FROM App\Entity\Commande c ORDER BY c.totale DESC';
            $query = $entityManager->createQuery($dql);
            $list = $query->getResult();

            return $this->render('commande/commande.html.twig', [
                'controller_name' => 'CommandeController',
                'list' => $list,
                'count' => $count
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
}
