<?php

namespace ContainerXYKmeyi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B5xQdEWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B5xQdEW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B5xQdEW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CityController::delete' => ['privates', '.service_locator.jyxuf8o', 'get_ServiceLocator_Jyxuf8oService', true],
            'App\\Controller\\CityController::edit' => ['privates', '.service_locator.jyxuf8o', 'get_ServiceLocator_Jyxuf8oService', true],
            'App\\Controller\\CityController::index' => ['privates', '.service_locator.mkff3Zb', 'get_ServiceLocator_Mkff3ZbService', true],
            'App\\Controller\\CityController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CityController::show' => ['privates', '.service_locator.ycxdVNz', 'get_ServiceLocator_YcxdVNzService', true],
            'App\\Controller\\ForecastController::delete' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController::edit' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController::index' => ['privates', '.service_locator.W6hnBOj', 'get_ServiceLocator_W6hnBOjService', true],
            'App\\Controller\\ForecastController::new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\ForecastController::show' => ['privates', '.service_locator.AySNhdq', 'get_ServiceLocator_AySNhdqService', true],
            'App\\Controller\\WeatherController::city' => ['privates', '.service_locator.Xb99AQH', 'get_ServiceLocator_Xb99AQHService', true],
            'App\\Controller\\WeatherController::country' => ['privates', '.service_locator.Xb99AQH', 'get_ServiceLocator_Xb99AQHService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CityController:delete' => ['privates', '.service_locator.jyxuf8o', 'get_ServiceLocator_Jyxuf8oService', true],
            'App\\Controller\\CityController:edit' => ['privates', '.service_locator.jyxuf8o', 'get_ServiceLocator_Jyxuf8oService', true],
            'App\\Controller\\CityController:index' => ['privates', '.service_locator.mkff3Zb', 'get_ServiceLocator_Mkff3ZbService', true],
            'App\\Controller\\CityController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CityController:show' => ['privates', '.service_locator.ycxdVNz', 'get_ServiceLocator_YcxdVNzService', true],
            'App\\Controller\\ForecastController:delete' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController:edit' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController:index' => ['privates', '.service_locator.W6hnBOj', 'get_ServiceLocator_W6hnBOjService', true],
            'App\\Controller\\ForecastController:new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\ForecastController:show' => ['privates', '.service_locator.AySNhdq', 'get_ServiceLocator_AySNhdqService', true],
            'App\\Controller\\WeatherController:city' => ['privates', '.service_locator.Xb99AQH', 'get_ServiceLocator_Xb99AQHService', true],
            'App\\Controller\\WeatherController:country' => ['privates', '.service_locator.Xb99AQH', 'get_ServiceLocator_Xb99AQHService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CityController::delete' => '?',
            'App\\Controller\\CityController::edit' => '?',
            'App\\Controller\\CityController::index' => '?',
            'App\\Controller\\CityController::new' => '?',
            'App\\Controller\\CityController::show' => '?',
            'App\\Controller\\ForecastController::delete' => '?',
            'App\\Controller\\ForecastController::edit' => '?',
            'App\\Controller\\ForecastController::index' => '?',
            'App\\Controller\\ForecastController::new' => '?',
            'App\\Controller\\ForecastController::show' => '?',
            'App\\Controller\\WeatherController::city' => '?',
            'App\\Controller\\WeatherController::country' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CityController:delete' => '?',
            'App\\Controller\\CityController:edit' => '?',
            'App\\Controller\\CityController:index' => '?',
            'App\\Controller\\CityController:new' => '?',
            'App\\Controller\\CityController:show' => '?',
            'App\\Controller\\ForecastController:delete' => '?',
            'App\\Controller\\ForecastController:edit' => '?',
            'App\\Controller\\ForecastController:index' => '?',
            'App\\Controller\\ForecastController:new' => '?',
            'App\\Controller\\ForecastController:show' => '?',
            'App\\Controller\\WeatherController:city' => '?',
            'App\\Controller\\WeatherController:country' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
