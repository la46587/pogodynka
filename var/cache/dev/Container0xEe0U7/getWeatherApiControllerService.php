<?php

namespace Container0xEe0U7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\WeatherApiController' shared autowired service.
     *
     * @return \App\Controller\WeatherApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'WeatherApiController.php';

        $container->services['App\\Controller\\WeatherApiController'] = $instance = new \App\Controller\WeatherApiController(($container->privates['App\\Service\\WeatherUtil'] ?? $container->load('getWeatherUtilService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\WeatherApiController', $container));

        return $instance;
    }
}