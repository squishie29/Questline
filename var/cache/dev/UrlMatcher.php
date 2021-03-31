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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categ', '_controller' => 'App\\Controller\\CategController::index'], null, null, null, false, false, null]],
        '/ajoutCategorie' => [[['_route' => 'categorienew', '_controller' => 'App\\Controller\\CategController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tricat' => [[['_route' => 'tricat', '_controller' => 'App\\Controller\\CategController::Tricat'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/ajoutEvent' => [[['_route' => 'ajouternew', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eventsFront' => [[['_route' => 'eventFront', '_controller' => 'App\\Controller\\EventController::indexFront'], null, null, null, false, false, null]],
        '/eventStats' => [[['_route' => 'eventStats', '_controller' => 'App\\Controller\\EventController::Stats'], null, null, null, false, false, null]],
        '/searchevent' => [[['_route' => 'searchevent', '_controller' => 'App\\Controller\\EventController::searchEvent'], null, ['POST' => 0], null, false, false, null]],
        '/trievent' => [[['_route' => 'trievents', '_controller' => 'App\\Controller\\EventController::Trievent'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'notifications', '_controller' => 'App\\Controller\\EventController::getNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/mesReservation' => [[['_route' => 'mesReservation', '_controller' => 'App\\Controller\\ReservationEventController::index'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'reservations', '_controller' => 'App\\Controller\\ReservationEventController::indexAdmin'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|modifier(?'
                        .'|Categorie(*:202)'
                        .'|Event(*:215)'
                    .')'
                    .'|supp(?'
                        .'|Cat(*:234)'
                        .'|Event(*:247)'
                    .')'
                .')'
                .'|/maps/(\\d+)(*:268)'
                .'|/reserverEvent/([^/]++)(*:299)'
                .'|/([^/]++)/(?'
                    .'|suppReservation(?'
                        .'|(*:338)'
                        .'|Admin(*:351)'
                    .')'
                    .'|modifierReservation(*:379)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'modifierCategorie', '_controller' => 'App\\Controller\\CategController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'modifierEvent', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'supprimerCategorie', '_controller' => 'App\\Controller\\CategController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        247 => [[['_route' => 'supprimerEvent', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        268 => [[['_route' => 'maps', '_controller' => 'App\\Controller\\EventController::indexFronts'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'reserverEvent', '_controller' => 'App\\Controller\\ReservationEventController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        338 => [[['_route' => 'suppReservation', '_controller' => 'App\\Controller\\ReservationEventController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        351 => [[['_route' => 'suppReservationAdmin', '_controller' => 'App\\Controller\\ReservationEventController::deleteAdmin'], ['id'], ['GET' => 0], null, false, false, null]],
        379 => [
            [['_route' => 'modifReservation', '_controller' => 'App\\Controller\\ReservationEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
