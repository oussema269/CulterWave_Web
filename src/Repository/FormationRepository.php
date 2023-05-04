<?php

namespace App\Repository;

use App\Entity\Formation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Formation>
 *
 * @method Formation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formation[]    findAll()
 * @method Formation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formation::class);
    }

    public function save(Formation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Formation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Formation[] Returns an array of Formation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Formation
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findByConfirmationTrue()
{
    return $this->createQueryBuilder('f')
        ->where('f.confirmation = :confirmation')
        ->setParameter('confirmation', true)
        ->getQuery()
        ->getResult();
}

public function findByConfirmationfalse()
{
    return $this->createQueryBuilder('f')
        ->where('f.confirmation = :confirmation')
        ->setParameter('confirmation', false)
        ->getQuery()
        ->getResult();
}

public function findByTitre($titre)
{
    $req = $this->createQueryBuilder('t')
    ->where("t.titre like :val")
    ->setParameter('val', "%" . $titre . "%")->getQuery()
    ->getResult();
return $req;
}

public function findById($id)
{
$req = $this->createQueryBuilder('t')
->where("t.id = :val")
->setParameter('val', $id)->getQuery()
->getResult();
return $req;
}


public function findByTitreAndConfirmationTrue($titre)
{
    return $this->createQueryBuilder('f')
        ->andWhere('f.titre = :titre')
        ->setParameter('titre', $titre)
        ->andWhere('f.confirmation = :confirmation')
        ->setParameter('confirmation', true)
        ->getQuery()
        ->getResult();
}
public function findByTitreAndConfirmationTrue2($titre)
{
    return $this->createQueryBuilder('f')
        ->andWhere('f.titre = :titre')
        ->setParameter('titre', $titre)
        ->andWhere('f.confirmation = :confirmation')
        ->setParameter('confirmation', true)
        ->getQuery()
        ->getResult();
}

public function accepterFormation(Formation $formation)
{
    $formation->setConfirmation(true);

    $entityManager = $this->getEntityManager();
    $entityManager->persist($formation);
    $entityManager->flush();
}
public function orderByid()
    {
        $req = $this->createQueryBuilder('f')
            ->orderBy("f.Id", 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
        return $req;
    }


    public function pagination(){
        return $this->createQueryBuilder('fo')
        ->where('fo.confirmation = :confirmation')
        ->setParameter('confirmation', true)
        ->orderBy('fo.id','ASC')
        ->getQuery()
        ;
    }
    public function findSortedByDate()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT f FROM App\Entity\Formation f WHERE f.confirmation = true ORDER BY f.debut ASC'

        );
        return $query->getResult();
    }
    

}
