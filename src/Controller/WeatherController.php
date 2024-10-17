<?php

namespace App\Controller;

use App\Entity\City;
use App\Repository\ForecastRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WeatherController extends AbstractController
{
    #[Route('/weather/{cityName}', name: 'app_weather')]
    public function city(City $city, ForecastRepository $repository): Response
    {
        $forecasts = $repository->findByCity($city);

        return $this->render('weather/city.html.twig', [
            'city' => $city,
            'forecasts' => $forecasts,
        ]);
    }

    #[Route('weather/{country}/{cityName}', name: 'app_weather')]
    public function country(City $city, ForecastRepository $repository): Response
    {
        $forecasts = $repository->findByCountry($city);

        return $this->render('weather/city.html.twig', [
           'city' => $city,
           'forecasts' => $forecasts,
        ]);
    }
}
