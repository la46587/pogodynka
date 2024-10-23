<?php

namespace App\Command;

use App\Service\WeatherUtil;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'weather:country',
    description: 'Displays a forecast for selected city in a selected country',
)]
class WeatherCountryCommand extends Command
{
    private WeatherUtil $weatherUtil;

    public function __construct(WeatherUtil $weatherUtil)
    {
        $this->weatherUtil = $weatherUtil;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('countryCode', InputArgument::REQUIRED, 'Code of selected country')
            ->addArgument('cityName', InputArgument::REQUIRED, 'Name of selected city');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $countryCode = $input->getArgument('countryCode');
        $cityName = $input->getArgument('cityName');

        $forecasts = $this->weatherUtil->getWeatherForCountryAndCity($countryCode, $cityName);

        if (empty($forecasts)) {
            $io->warning('No forecasts for selected country and city.');
        } else {
            foreach ($forecasts as $forecast) {
                $forecastDate = $forecast->getDate() ? $forecast->getDate()->format('Y-m-d') : 'Nieznana data';

                $io->section(sprintf('Forecast for %s, %s on %s:', $cityName, $countryCode, $forecastDate));
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
