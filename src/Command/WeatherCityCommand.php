<?php

namespace App\Command;

use App\Repository\CityRepository;
use App\Service\WeatherUtil;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'weather:city',
    description: 'Displays a forecast for selected city',
)]
class WeatherCityCommand extends Command
{
    private WeatherUtil $weatherUtil;
    private CityRepository $cityRepository;
    public function __construct(WeatherUtil $weatherUtil, CityRepository $cityRepository)
    {
        $this->weatherUtil = $weatherUtil;
        $this->cityRepository = $cityRepository;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('cityId', InputArgument::REQUIRED, 'ID of selected city')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $cityId = $input->getArgument('cityId');
        $city = $this->cityRepository->find($cityId);

        $forecasts = $this->weatherUtil->getWeatherForCity($city);

        if (empty($forecasts)) {
            $io->warning('No forecasts for selected city.');
        } else {
            foreach ($forecasts as $forecast) {
                $forecastDate = $forecast->getDate();
                $io->section(sprintf('Forecast for %s on %s:', $city->getCityName(), $forecast->getDate()->format('Y-m-d')));
                $io->text([
                    'Temperature: ' . $forecast->getTemperature() . ' C',
                    'Humidity: ' . $forecast->getHumidity() . '%',
                    'Pressure: ' . $forecast->getPressure() . ' hPa',
                    'Description: ' . $forecast->getDescription(),
                ]);
            }
        }

        return Command::SUCCESS;
    }
}
