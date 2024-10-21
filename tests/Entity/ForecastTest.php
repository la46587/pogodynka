<?php

namespace App\Tests\Entity;

use App\Entity\Forecast;
use PHPUnit\Framework\TestCase;

class ForecastTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['0', 32],
            ['-100', -148],
            ['100', 212],
            ['0.5', 32.9],
            ['-40', -40],
            ['37', 98.6],
            ['-273.15', -459.67],
            ['25', 77],
            ['-17.78', 0],
            ['20.5', 68.9],
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */

    public function testGetFahrenheit($temperature, $expectedFahrenheit): void
    {
        $forecast = new Forecast();

        $forecast->setTemperature($temperature);
        $this->assertEquals($expectedFahrenheit, $forecast->getFahrenheit(), '$temperature C should return $expectedFahrenheit F');
    }
}
