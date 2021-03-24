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
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/hotels' => [[['_route' => 'hotels', '_controller' => 'App\\Controller\\FrontController::affichehotels'], null, ['GET' => 0], null, false, false, null]],
        '/reservation_new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\FrontController::reservation_new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\FrontController::getRealEntities'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\GalleryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gallery/new' => [[['_route' => 'gallery_new', '_controller' => 'App\\Controller\\GalleryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hotel/new' => [[['_route' => 'hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/options' => [[['_route' => 'options_index', '_controller' => 'App\\Controller\\OptionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/options/new' => [[['_route' => 'options_new', '_controller' => 'App\\Controller\\OptionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/hotel' => [[['_route' => 'reservation_hotel_index', '_controller' => 'App\\Controller\\ReservationHotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/hotel/new' => [[['_route' => 'reservation_hotel_new', '_controller' => 'App\\Controller\\ReservationHotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/room' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/hotel(?'
                    .'|s/(\\d+)(*:185)'
                    .'|/(?'
                        .'|(\\d+)(*:202)'
                        .'|([^/]++)(?'
                            .'|/edit(*:226)'
                            .'|(*:234)'
                        .')'
                        .'|searchHotelx(*:255)'
                    .')'
                .')'
                .'|/r(?'
                    .'|eservation(?'
                        .'|New/(\\d+)(*:292)'
                        .'|Hotels/(\\d+)(*:312)'
                        .'|/hotel/([^/]++)(?'
                            .'|(*:338)'
                            .'|/edit(*:351)'
                            .'|(*:359)'
                        .')'
                    .')'
                    .'|oom/(?'
                        .'|(\\d+)(*:381)'
                        .'|([^/]++)(?'
                            .'|/edit(*:405)'
                            .'|(*:413)'
                        .')'
                        .'|searchRoomx(*:433)'
                    .')'
                .')'
                .'|/gallery/([^/]++)(?'
                    .'|(*:463)'
                    .'|/edit(*:476)'
                    .'|(*:484)'
                .')'
                .'|/options/(?'
                    .'|(\\d+)(*:510)'
                    .'|([^/]++)(?'
                        .'|/edit(*:534)'
                        .'|(*:542)'
                    .')'
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
        185 => [[['_route' => 'hotel_shows', '_controller' => 'App\\Controller\\FrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        255 => [[['_route' => 'searchHotelx', '_controller' => 'App\\Controller\\HotelController::searchHotelx'], [], null, null, false, false, null]],
        292 => [[['_route' => 'reservationNew', '_controller' => 'App\\Controller\\FrontController::reservationNew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        312 => [[['_route' => 'reservation_hotel_new2', '_controller' => 'App\\Controller\\FrontController::test2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        338 => [[['_route' => 'reservation_hotel_show', '_controller' => 'App\\Controller\\ReservationHotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'reservation_hotel_edit', '_controller' => 'App\\Controller\\ReservationHotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'reservation_hotel_delete', '_controller' => 'App\\Controller\\ReservationHotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        381 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        433 => [[['_route' => 'searchRoomx', '_controller' => 'App\\Controller\\RoomController::searchRoomx'], [], null, null, false, false, null]],
        463 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        476 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GalleryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        484 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GalleryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        510 => [[['_route' => 'options_show', '_controller' => 'App\\Controller\\OptionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'options_edit', '_controller' => 'App\\Controller\\OptionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [
            [['_route' => 'options_delete', '_controller' => 'App\\Controller\\OptionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
