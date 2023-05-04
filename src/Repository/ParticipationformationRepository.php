<?php

namespace App\Repository;

use App\Entity\Participationformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Participationformation>
 *
 * @method Participationformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participationformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participationformation[]    findAll()
 * @method Participationformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipationformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participationformation::class);
    }

    public function save(Participationformation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Participationformation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Participationformation[] Returns an array of Participationformation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Participationformation
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function countParticipationsByFormation()
{
    return $this->createQueryBuilder('f')
        ->leftJoin('f.Participationformation', 'p')
        ->select('f.id as Idparticipationformation, COUNT(p) as formation_id')
        ->groupBy('f.id')
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
}
public function findByFormationId($id)
{
    return $this->createQueryBuilder('p')
        ->select('p.formations.debut, p.formations.fin')
        ->where('p.formations.id = :formations_id')
        ->setParameter('formations_id', $id)
        ->getQuery()
        ->getOneOrNullResult();
}

}
