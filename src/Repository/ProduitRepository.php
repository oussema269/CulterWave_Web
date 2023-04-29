<?php

namespace App\Repository;
use App\Model\SearchData;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;


/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{




    private PaginatorInterface $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Produit::class);
        $this->paginator = $paginator;
    }


    public function save(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findCategoryByProduct(Produit $produit): ?Category
                {
                    return $this->createQueryBuilder('p')
                        ->leftJoin('p.categorie', 'c')
                        ->where('p.id = :produitId')
                        ->setParameter('produitId', $produit->getId())
                        ->select('c.categorie')
                        ->getQuery()
                        ->getOneOrNullResult();
                }

                




//    /**
//     * @return Produit[] Returns an array of Produit objects
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

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


 /**
     * Get published posts thanks to Search Data value
     *
     * @param SearchData $searchData
     * @return PaginationInterface
     */

public function findBySearch(SearchData $SearchData): PaginationInterface
{
   
    $query = $this->createQueryBuilder('p')
          ->addOrderBy('p.id', 'DESC');

    if (!empty($SearchData->q)) {
        $query->andWhere('p.lib LIKE :q')
            ->setParameter('q', "%{$SearchData->q}%");
    }
    if (!empty($SearchData->categories)) {
        $query = $query
            ->join('p.categorie', 'c')
            ->andWhere('c.idCat IN (:categories)')
            ->setParameter('categories', $SearchData->categories);
    }




    $produits=$query
        ->getQuery()
        ->getResult();
    
    $produits = $this->paginator->paginate($query ,$SearchData->page,3);

    return $produits;
}

}
