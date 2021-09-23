<?php

namespace App\Repository;

use App\Entity\GameTables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GameTables|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameTables|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameTables[]    findAll()
 * @method GameTables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameTablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameTables::class);
    }

    // /**
    //  * @return GameTables[] Returns an array of GameTables objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GameTables
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
