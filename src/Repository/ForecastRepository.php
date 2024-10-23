<?php

namespace App\Repository;

use App\Entity\City;
use App\Entity\Forecast;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Forecast>
 */
class ForecastRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Forecast::class);
    }

    public function findByCity(City $city)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.city = :city')
            ->setParameter('city', $city)
            ->andWhere('m.date > :now')
            ->setParameter('now', date('YYYY-mm-dd'));

        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }

    public function findByCountry(City $city)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.city = :city')
            ->setParameter('city', $city)
            ->andWhere('m.date > :now')
            ->setParameter('now', date('YYYY-mm-dd'));

        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }
}
