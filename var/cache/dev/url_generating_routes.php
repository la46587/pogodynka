<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_city_index' => [[], ['_controller' => 'App\\Controller\\CityController::index'], [], [['text', '/city']], [], [], []],
    'app_city_new' => [[], ['_controller' => 'App\\Controller\\CityController::new'], [], [['text', '/city/new']], [], [], []],
    'app_city_show' => [['id'], ['_controller' => 'App\\Controller\\CityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'app_city_edit' => [['id'], ['_controller' => 'App\\Controller\\CityController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'app_city_delete' => [['id'], ['_controller' => 'App\\Controller\\CityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'app_forecast_index' => [[], ['_controller' => 'App\\Controller\\ForecastController::index'], [], [['text', '/forecast']], [], [], []],
    'app_forecast_new' => [[], ['_controller' => 'App\\Controller\\ForecastController::new'], [], [['text', '/forecast/new']], [], [], []],
    'app_forecast_show' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_forecast_edit' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_forecast_delete' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_weather_api' => [[], ['_controller' => 'App\\Controller\\WeatherApiController::index'], [], [['text', '/api/v1/weather']], [], [], []],
    'app_weather' => [['country', 'cityName'], ['_controller' => 'App\\Controller\\WeatherController::city'], [], [['variable', '/', '[^/]++', 'cityName', true], ['variable', '/', '[^/]++', 'country', true], ['text', '/weather']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'App\Controller\CityController::index' => [[], ['_controller' => 'App\\Controller\\CityController::index'], [], [['text', '/city']], [], [], []],
    'App\Controller\CityController::new' => [[], ['_controller' => 'App\\Controller\\CityController::new'], [], [['text', '/city/new']], [], [], []],
    'App\Controller\CityController::show' => [['id'], ['_controller' => 'App\\Controller\\CityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'App\Controller\CityController::edit' => [['id'], ['_controller' => 'App\\Controller\\CityController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'App\Controller\CityController::delete' => [['id'], ['_controller' => 'App\\Controller\\CityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], [], []],
    'App\Controller\ForecastController::index' => [[], ['_controller' => 'App\\Controller\\ForecastController::index'], [], [['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::new' => [[], ['_controller' => 'App\\Controller\\ForecastController::new'], [], [['text', '/forecast/new']], [], [], []],
    'App\Controller\ForecastController::show' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::edit' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::delete' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\LoginController::index' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'App\Controller\WeatherApiController::index' => [[], ['_controller' => 'App\\Controller\\WeatherApiController::index'], [], [['text', '/api/v1/weather']], [], [], []],
    'App\Controller\WeatherController::city' => [['country', 'cityName'], ['_controller' => 'App\\Controller\\WeatherController::city'], [], [['variable', '/', '[^/]++', 'cityName', true], ['variable', '/', '[^/]++', 'country', true], ['text', '/weather']], [], [], []],
];
