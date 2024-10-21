<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/city' => [[['_route' => 'app_city_index', '_controller' => 'App\\Controller\\CityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/city/new' => [[['_route' => 'app_city_new', '_controller' => 'App\\Controller\\CityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forecast' => [[['_route' => 'app_forecast_index', '_controller' => 'App\\Controller\\ForecastController::index'], null, ['GET' => 0], null, false, false, null]],
        '/forecast/new' => [[['_route' => 'app_forecast_new', '_controller' => 'App\\Controller\\ForecastController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/city/([^/]++)(?'
                    .'|(*:219)'
                    .'|/edit(*:232)'
                    .'|(*:240)'
                .')'
                .'|/forecast/([^/]++)(?'
                    .'|(*:270)'
                    .'|/edit(*:283)'
                    .'|(*:291)'
                .')'
                .'|/weather/([^/]++)/([^/]++)(*:326)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_forecast_show', '_controller' => 'App\\Controller\\ForecastController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_forecast_edit', '_controller' => 'App\\Controller\\ForecastController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_forecast_delete', '_controller' => 'App\\Controller\\ForecastController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        326 => [
            [['_route' => 'app_weather', '_controller' => 'App\\Controller\\WeatherController::city'], ['country', 'cityName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
