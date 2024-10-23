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
            ->andWhere('m.date < :now')
            ->setParameter('now', date('Y-m-d'));

        $query = $qb->getQuery();
        return $query->getResult();
    }

    public function findByCountry(string $countryCode, string $cityName)
    {
        $qb = $this->createQueryBuilder('m')
            ->join('m.city', 'c')
            ->where('c.country = :countryCode')
            ->setParameter('countryCode', $countryCode)
            ->andWhere('c.cityName = :cityName')
            ->setParameter('cityName', $cityName)
            ->andWhere('m.date < :now')
            ->setParameter('now', date('Y-m-d'));

        // Pobieramy wyniki zapytania (prognozy)
        return $qb->getQuery()->getResult();
    }

}
