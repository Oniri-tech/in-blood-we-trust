<?php

namespace App\Repository;

use App\Entity\GameCharacters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GameCharacters|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameCharacters|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameCharacters[]    findAll()
 * @method GameCharacters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameCharactersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameCharacters::class);
    }

    // /**
    //  * @return GameCharacters[] Returns an array of GameCharacters objects
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
    public function findOneBySomeField($value): ?GameCharacters
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
