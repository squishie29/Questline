<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
    * @return Event[] Returns an array of Event objects
    */
    public function findEventByName($nom)
    {
        return $this->createQueryBuilder('e')
            ->where('e.nom like :nom')
            ->setParameter('nom', $nom.'%')
            ->getQuery()
            ->getResult();
    }

    public function listOrderByName()
    {
        return $this->createQueryBuilder('Event')
            ->orderBy('Event.nom', 'ASC')
            ->getQuery()->getResult();
    }


    public function findAllQueryBuilder(string $filter )
    {
        $qb = $this->createQueryBuilder('Event');
        if ($filter) {
            $qb->andWhere('Event.nom LIKE :filter OR Event.destination LIKE :filter   ')
                ->setParameter('filter', '%'.$filter.'%');
        }
        return $qb
            ->getQuery()
            ->getResult();



    }

}
