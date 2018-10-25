<?php

namespace App\Repository;

use App\Entity\CreaToTech;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Techno;
use App\Entity\Creation;

/**
 * @method CreaToTech|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreaToTech|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreaToTech[]    findAll()
 * @method CreaToTech[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreaToTechRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CreaToTech::class);
    }

//    /**
//     * @return CreaToTech[] Returns an array of CreaToTech objects
//     */
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
    public function findOneBySomeField($value): ?CreaToTech
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
