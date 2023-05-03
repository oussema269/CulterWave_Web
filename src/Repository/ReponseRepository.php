<?php
namespace App\Repository;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reponse::class);
    }

    public function findContenuByReclamation(Reclamation $reclamation): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reclamation = :reclamation')
            ->setParameter('reclamation', $reclamation)
            ->select('r.contenu')
            ->getQuery()
            ->getResult();
    }
}
