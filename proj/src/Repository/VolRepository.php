<?php

namespace App\Repository;

use App\Entity\Vol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vol[]    findAll()
 * @method Vol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vol::class);
    }

    // /**
    //  * @return Vol[] Returns an array of Vol objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vol
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findAllQueryBuilder(string $filter )
    {
        $qb = $this->createQueryBuilder('u');
        if ($filter) {
            $qb->andWhere('u.id LIKE :filter OR u.date LIKE :filter OR u.prix LIKE :filter OR u.nbplace LIKE :filter  ')
                ->setParameter('filter', '%'.$filter.'%');
        }
        return $qb
            ->getQuery()
            ->getResult();



    }
    public function listOrderByName()
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.nom', 'ASC')
            ->getQuery()->getResult();
    }
}
