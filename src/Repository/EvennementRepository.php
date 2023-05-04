<?php

namespace App\Repository;

use App\Entity\Evennement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evennement>
 *
 * @method Evennement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evennement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evennement[]    findAll()
 * @method Evennement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvennementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evennement::class);
    }

    public function save(Evennement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Evennement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByNom(string $nom): array
    {
    return $this->createQueryBuilder('e')
        ->where('e.nom LIKE :nom')
        ->setParameter('nom', '%'.$nom.'%')
        ->getQuery()
        ->getResult();
    }
    
    public function findByTitre($nom)
    {
    return $this->createQueryBuilder('t')
    ->where('t.nom LIKE :nom')
    ->setParameter('nom', '%'.$nom.'%')
    ->getQuery()
    ->getResult();
   

    }

    public function sortByDate()
{
    return $this->createQueryBuilder('a')
        ->orderBy('a.date', 'DESC')
        ->getQuery()
        ->getResult();
}


 

    public function findByOrderByNom()
    {
        $req = $this->createQueryBuilder('s')
            ->orderBy("s.nom", 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
        return $req;
    }

    public function paginationqu(){
        return $this->createQueryBuilder('fo')
        ->orderBy('fo.id','ASC')
        ->getQuery()
        ;
    }
    

    public function findPlanBySujet($nom){
        return $this->createQueryBuilder('ex')
            ->andWhere('ex.nom LIKE :nom ')
            ->setParameter('nom', '%'.$nom.'%')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Evennement[] Returns an array of Evennement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evennement
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
