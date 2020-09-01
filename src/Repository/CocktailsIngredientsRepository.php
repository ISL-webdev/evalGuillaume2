<?php

namespace App\Repository;

use App\Entity\CocktailsIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CocktailsIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method CocktailsIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method CocktailsIngredients[]    findAll()
 * @method CocktailsIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CocktailsIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CocktailsIngredients::class);
    }

    // /**
    //  * @return CocktailsIngredients[] Returns an array of CocktailsIngredients objects
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
    public function findOneBySomeField($value): ?CocktailsIngredients
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
