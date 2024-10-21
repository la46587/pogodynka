<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\City;
use App\Entity\Forecast;
use App\Repository\ForecastRepository;

class WeatherUtil
{
    private ForecastRepository $forecastRepository;

    public function __construct(ForecastRepository $forecastRepository)
    {
        $this->forecastRepository = $forecastRepository;
    }
    public function getWeatherForCity(City $city): array
    {
        return $this->forecastRepository->findByCity($city);
    }

    public function getWeatherForCountryAndCity(string $countryCode, string $cityName): array
    {
        return $this->forecastRepository->findByCountry($countryCode, $cityName);
    }

}