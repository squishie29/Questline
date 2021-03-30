<?php

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function CalculParticipants(Event $event): ?int
    {
        $query = $this->findBy(array('event'=>$event));
        $nbr_participant=0;
        foreach ($query as $r){
            $nbr_participant+=$r->getNbrParticipant();
        }
        return $nbr_participant;

    }

    public function CalculPlacesRestant(Event $event): ?int
    {
        $nbr_places=$event->getNbrPlaces();
        $nbr = $nbr_places - $this->CalculParticipants($event) ;
        return $nbr;
    }

    public function CalculTotal(Event $event): ?float
    {
        $nbr_places = $this->CalculParticipants($event) ;
        $total=$nbr_places * $event->getPrix();
        return $total;
    }

}
