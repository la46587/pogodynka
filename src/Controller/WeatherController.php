<?php

namespace App\Controller;

use App\Entity\City;
use App\Repository\ForecastRepository;
use App\Service\WeatherUtil;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WeatherController extends AbstractController
{
    #[Route('weather/{country}/{cityName}', name: 'app_weather')]
    public function city(
        #[MapEntity(mapping: ['country' => 'country', 'city' => 'city'])]
        City $city,
        WeatherUtil $util,
    ): Response
    {
        $forecasts = $util->getWeatherForCity($city);

        return $this->render('weather/city.html.twig', [
           'city' => $city,
           'forecasts' => $forecasts,
        ]);
    }
}
