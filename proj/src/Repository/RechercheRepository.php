<?php

namespace App\Repository;

use App\Entity\Recherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Recherche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recherche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recherche[]    findAll()
 * @method Recherche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RechercheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recherche::class);
    }

   
}
