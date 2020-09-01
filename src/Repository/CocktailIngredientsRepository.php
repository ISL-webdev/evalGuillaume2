<?php

namespace App\Repository;

use App\Entity\CocktailIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CocktailIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method CocktailIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method CocktailIngredients[]    findAll()
 * @method CocktailIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CocktailIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CocktailIngredients::class);
    }

    // /**
    //  * @return CocktailIngredients[] Returns an array of CocktailIngredients objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CocktailIngredients
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
