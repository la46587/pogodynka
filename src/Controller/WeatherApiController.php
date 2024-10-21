<?php

namespace App\Controller;

use App\Entity\Forecast;
use App\Service\WeatherUtil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

class WeatherApiController extends AbstractController
{
    private WeatherUtil $weatherUtil;

    public function __construct(WeatherUtil $weatherUtil)
    {
        $this->weatherUtil = $weatherUtil;
    }

    #[Route('/api/v1/weather', name: 'app_weather_api', methods: ['GET'])]
    public function index(Request $request, #[MapQueryParameter('twig')] bool $twig = false): Response
    {
        $country = $request->query->get('country');
        $city = $request->query->get('city');
        $format = $request->query->get('format', 'json');

        if (!$country || !$city) {
            return new JsonResponse([
                'error' => 'Missing required paramters: country or city'
            ], 400);
        }

        $forecasts = $this->weatherUtil->getWeatherForCountryAndCity($country, $city);

        if (empty($forecasts)) {
            return new JsonResponse([
                'error' => 'No forecasts available for selected country and city.'
            ], 404);
        }

        if ($twig) {
            if ($format === 'csv') {
                $response = $this->render('weather_api/index.csv.twig', [
                    'city' => $city,
                    'country' => $country,
                    'forecasts' => $forecasts,
                ]);
                $response->headers->set('Content-Type', 'text/plain');
                $response->headers->set('Content-Disposition', 'inline; filename: "weather.csv"');
                return $response;
            }

            return $this->render('weather_api/index.json.twig', [
                'city' => $city,
                'country' => $country,
                'forecasts' => $forecasts,
            ]);
        }

        if ($format === 'json') {
            return new JsonResponse([
                'country' => $country,
                'city' => $city,
                'forecasts' => array_map(fn(Forecast $f) => [
                    'date' => $f->getDate()->format('Y-m-d'),
                    'temperature' => $f->getTemperature(),
                    'temperatureF' => $f->getFahrenheit(),
                    'humidity' => $f->getHumidity(),
                    'pressure' => $f->getPressure(),
                    'description' =>$f->getDescription(),
                ], $forecasts),
            ]);
        }

        if ($format === 'csv') {
            $csvData = [];
            $csvData[] = ['city', 'country', 'date', 'temperature', 'humidity', 'pressure', 'description'];

            foreach($forecasts as $forecast) {
                $csvData[] = [
                    $city,
                    $country,
                    $forecast->getDate()->format('Y-m-d'),
                    $forecast->getTemperature(),
                    $forecast->getFahrenheit(),
                    $forecast->getHumidity(),
                    $forecast->getPressure(),
                    $forecast->getDescription(),
                ];
            }

            $csvContent = '';
            foreach ($csvData as $row) {
                $csvContent .= implode(',', $row) . "\n";
            }

            $response = new Response($csvContent);
            $response->headers->set('Content-Type', 'text/plain');
            $response->headers->set('Content-Disposition', 'inline; filename="weather.csv');

            return $response;
        }

        return new JsonResponse([
            'error' => 'Invalid format. Supported formats are json and csv.'
        ], 400);
    }
}
