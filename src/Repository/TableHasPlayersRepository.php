<?php

namespace App\Repository;

use App\Entity\TableHasPlayers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TableHasPlayers|null find($id, $lockMode = null, $lockVersion = null)
 * @method TableHasPlayers|null findOneBy(array $criteria, array $orderBy = null)
 * @method TableHasPlayers[]    findAll()
 * @method TableHasPlayers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableHasPlayersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableHasPlayers::class);
    }

    // /**
    //  * @return TableHasPlayers[] Returns an array of TableHasPlayers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TableHasPlayers
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
