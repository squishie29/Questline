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
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categ', '_controller' => 'App\\Controller\\CategController::index'], null, null, null, false, false, null]],
        '/ajoutCategorie' => [[['_route' => 'categorienew', '_controller' => 'App\\Controller\\CategController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tricat' => [[['_route' => 'tricat', '_controller' => 'App\\Controller\\CategController::Tricat'], null, null, null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\ChartController::index'], null, null, null, false, false, null]],
        '/chart2' => [[['_route' => 'chart2', '_controller' => 'App\\Controller\\ChartController::index2'], null, null, null, false, false, null]],
        '/chart3' => [[['_route' => 'chart3', '_controller' => 'App\\Controller\\ChartController::index3'], null, null, null, false, false, null]],
        '/destination/destinationFront' => [[['_route' => 'destinationFront', '_controller' => 'App\\Controller\\DestinationController::indexFront'], null, null, null, false, false, null]],
        '/destination' => [[['_route' => 'destination_index', '_controller' => 'App\\Controller\\DestinationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/destination/new' => [[['_route' => 'destination_new', '_controller' => 'App\\Controller\\DestinationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/ajoutEvent' => [[['_route' => 'ajouternew', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eventsFront' => [[['_route' => 'eventFront', '_controller' => 'App\\Controller\\EventController::indexFront'], null, null, null, false, false, null]],
        '/eventStats' => [[['_route' => 'eventStats', '_controller' => 'App\\Controller\\EventController::Stats'], null, null, null, false, false, null]],
        '/searchevent' => [[['_route' => 'searchevent', '_controller' => 'App\\Controller\\EventController::searchEvent'], null, ['POST' => 0], null, false, false, null]],
        '/trievent' => [[['_route' => 'trievents', '_controller' => 'App\\Controller\\EventController::Trievent'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'notifications', '_controller' => 'App\\Controller\\EventController::getNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'front2', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/front' => [
            [['_route' => 'front_review', '_controller' => 'App\\Controller\\FrontController::affichage'], null, null, null, false, false, null],
            [['_route' => 'front', '_controller' => 'App\\Controller\\VoyageController::front'], null, null, null, false, false, null],
        ],
        '/sign' => [[['_route' => 'sign', '_controller' => 'App\\Controller\\FrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotels' => [[['_route' => 'hotels', '_controller' => 'App\\Controller\\FrontController1::affichehotels'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\FrontController1::getRealEntities'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\GalleryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gallery/new' => [[['_route' => 'gallery_new', '_controller' => 'App\\Controller\\GalleryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/guideList' => [[['_route' => 'guideList', '_controller' => 'App\\Controller\\GuideController::readGuide'], null, null, null, false, false, null]],
        '/guideFront' => [[['_route' => 'guideFront', '_controller' => 'App\\Controller\\GuideController::read'], null, null, null, false, false, null]],
        '/addGuide' => [[['_route' => 'addGuide', '_controller' => 'App\\Controller\\GuideController::addGuide'], null, null, null, false, false, null]],
        '/rechercheGuide' => [[['_route' => 'rechercheGuide', '_controller' => 'App\\Controller\\GuideController::Recherche'], null, null, null, false, false, null]],
        '/guide/listDQLG' => [[['_route' => 'listDQLG', '_controller' => 'App\\Controller\\GuideController::orderbyEmail'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/hotel/new' => [[['_route' => 'hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/options' => [[['_route' => 'options_index', '_controller' => 'App\\Controller\\OptionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/options/new' => [[['_route' => 'options_new', '_controller' => 'App\\Controller\\OptionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mesReservation' => [[['_route' => 'mesReservation', '_controller' => 'App\\Controller\\ReservationEventController::index'], null, null, null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'reservations', '_controller' => 'App\\Controller\\ReservationEventController::indexAdmin'], null, null, null, false, false, null]],
        '/reservation/hotel' => [[['_route' => 'reservation_hotel_index', '_controller' => 'App\\Controller\\ReservationHotelController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reservation/hotel/new' => [[['_route' => 'reservation_hotel_new', '_controller' => 'App\\Controller\\ReservationHotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ReservationVol/ReservationVolFront' => [[['_route' => 'ReservationVolFront', '_controller' => 'App\\Controller\\ReservationVolController::indexFront'], null, null, null, false, false, null]],
        '/ReservationVol/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\ReservationVolController::statistique'], null, null, null, false, false, null]],
        '/ReservationVol/pdf' => [[['_route' => 'ReservationVol_pdf', '_controller' => 'App\\Controller\\ReservationVolController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/ReservationVol' => [[['_route' => 'ReservationVol_index', '_controller' => 'App\\Controller\\ReservationVolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ReservationVol/new' => [[['_route' => 'ReservationVol_new', '_controller' => 'App\\Controller\\ReservationVolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/review' => [[['_route' => 'review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/review/new' => [[['_route' => 'review_new', '_controller' => 'App\\Controller\\ReviewController::new2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/room' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vol/volFront' => [[['_route' => 'volFront', '_controller' => 'App\\Controller\\VolController::indexFront'], null, null, null, false, false, null]],
        '/vol' => [[['_route' => 'vol_index', '_controller' => 'App\\Controller\\VolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vol/new' => [[['_route' => 'vol_new', '_controller' => 'App\\Controller\\VolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\VoyageController::back'], null, null, null, false, false, null]],
        '/voyageFront' => [[['_route' => 'voyageFront', '_controller' => 'App\\Controller\\VoyageController::read'], null, null, null, false, false, null]],
        '/voyageList' => [[['_route' => 'voyageList', '_controller' => 'App\\Controller\\VoyageController::readVoyage'], null, null, null, false, false, null]],
        '/addVoyage' => [[['_route' => 'addVoyage', '_controller' => 'App\\Controller\\VoyageController::addVoyage'], null, null, null, false, false, null]],
        '/voyage/listDQL' => [[['_route' => 'listDQL', '_controller' => 'App\\Controller\\VoyageController::orderbyprix'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'options_test', '_controller' => 'App\\Controller\\hotelDepartementController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                .'|/addPanier/([^/]++)(*:188)'
                .'|/removePanier/([^/]++)(*:218)'
                .'|/([^/]++)/(?'
                    .'|modifierCategorie(*:256)'
                    .'|suppCat(*:271)'
                .')'
                .'|/destination/(?'
                    .'|([^/]++)(?'
                        .'|(*:307)'
                        .'|/edit(*:320)'
                        .'|(*:328)'
                    .')'
                    .'|map/(\\d+)(*:346)'
                .')'
                .'|/([^/]++)/(?'
                    .'|modifierEvent(*:381)'
                    .'|suppEvent(*:398)'
                .')'
                .'|/maps/(\\d+)(*:418)'
                .'|/([^/]++)/(?'
                    .'|check(*:444)'
                    .'|test(*:456)'
                .')'
                .'|/hotel(?'
                    .'|s/(\\d+)(*:481)'
                    .'|/(?'
                        .'|(\\d+)(*:498)'
                        .'|([^/]++)(?'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                        .'|searchHotelx(*:551)'
                    .')'
                .')'
                .'|/reserv(?'
                    .'|ationNew/(\\d+)(*:585)'
                    .'|erEvent/([^/]++)(*:609)'
                .')'
                .'|/gallery/([^/]++)(?'
                    .'|(*:638)'
                    .'|/edit(*:651)'
                    .'|(*:659)'
                .')'
                .'|/deleteGuide/([^/]++)(*:689)'
                .'|/updateGuide/([^/]++)(*:718)'
                .'|/options/(?'
                    .'|(\\d+)(*:743)'
                    .'|([^/]++)(?'
                        .'|/edit(*:767)'
                        .'|(*:775)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|suppReservation(?'
                        .'|(*:816)'
                        .'|Admin(*:829)'
                    .')'
                    .'|modifierReservation(*:857)'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|servation/hotel/([^/]++)(?'
                            .'|(*:902)'
                            .'|/edit(*:915)'
                            .'|(*:923)'
                        .')'
                        .'|view/([^/]++)(?'
                            .'|(*:948)'
                            .'|/edit(*:961)'
                            .'|(*:969)'
                        .')'
                    .')'
                    .'|oom/(?'
                        .'|(\\d+)(*:991)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1015)'
                            .'|(*:1024)'
                        .')'
                        .'|searchRoomx(*:1045)'
                    .')'
                .')'
                .'|/ReservationVol/([^/]++)(?'
                    .'|(*:1083)'
                    .'|/edit(*:1097)'
                    .'|(*:1106)'
                .')'
                .'|/u(?'
                    .'|tilisateur/(?'
                        .'|(\\d+)(*:1140)'
                        .'|(\\d+)/edit(*:1159)'
                        .'|([^/]++)(*:1176)'
                        .'|searchStudentx(*:1199)'
                    .')'
                    .'|pdateVoyage/([^/]++)(*:1229)'
                .')'
                .'|/vol/([^/]++)(?'
                    .'|(*:1255)'
                    .'|/edit(*:1269)'
                    .'|(*:1278)'
                .')'
                .'|/deleteVoyage/([^/]++)(*:1310)'
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
        188 => [[['_route' => 'addPanier', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'removePanier', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'modifierCategorie', '_controller' => 'App\\Controller\\CategController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'supprimerCategorie', '_controller' => 'App\\Controller\\CategController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        307 => [[['_route' => 'destination_show', '_controller' => 'App\\Controller\\DestinationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        320 => [[['_route' => 'destination_edit', '_controller' => 'App\\Controller\\DestinationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'destination_delete', '_controller' => 'App\\Controller\\DestinationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        346 => [[['_route' => 'map5', '_controller' => 'App\\Controller\\DestinationController::indexFrontss'], ['id'], ['GET' => 0], null, false, true, null]],
        381 => [[['_route' => 'modifierEvent', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'supprimerEvent', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        418 => [[['_route' => 'maps', '_controller' => 'App\\Controller\\EventController::indexFronts'], ['id'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'reservation_hotel_check', '_controller' => 'App\\Controller\\FrontController1::checkout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'test', '_controller' => 'App\\Controller\\FrontController1::testing'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'hotel_shows', '_controller' => 'App\\Controller\\FrontController1::show'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        551 => [[['_route' => 'searchHotelx', '_controller' => 'App\\Controller\\HotelController::searchHotelx'], [], null, null, false, false, null]],
        585 => [[['_route' => 'reservationNew', '_controller' => 'App\\Controller\\FrontController1::reservationNew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        609 => [[['_route' => 'reserverEvent', '_controller' => 'App\\Controller\\ReservationEventController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        638 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GalleryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GalleryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        689 => [[['_route' => 'deleteGuide', '_controller' => 'App\\Controller\\GuideController::deleteGuide'], ['id'], null, null, false, true, null]],
        718 => [[['_route' => 'updateGuide', '_controller' => 'App\\Controller\\GuideController::updateGuide'], ['id'], null, null, false, true, null]],
        743 => [[['_route' => 'options_show', '_controller' => 'App\\Controller\\OptionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        767 => [[['_route' => 'options_edit', '_controller' => 'App\\Controller\\OptionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        775 => [[['_route' => 'options_delete', '_controller' => 'App\\Controller\\OptionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        816 => [[['_route' => 'suppReservation', '_controller' => 'App\\Controller\\ReservationEventController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        829 => [[['_route' => 'suppReservationAdmin', '_controller' => 'App\\Controller\\ReservationEventController::deleteAdmin'], ['id'], ['GET' => 0], null, false, false, null]],
        857 => [[['_route' => 'modifReservation', '_controller' => 'App\\Controller\\ReservationEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        902 => [[['_route' => 'reservation_hotel_show', '_controller' => 'App\\Controller\\ReservationHotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        915 => [[['_route' => 'reservation_hotel_edit', '_controller' => 'App\\Controller\\ReservationHotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        923 => [[['_route' => 'reservation_hotel_delete', '_controller' => 'App\\Controller\\ReservationHotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        948 => [[['_route' => 'review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        961 => [[['_route' => 'review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        969 => [[['_route' => 'review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        991 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1015 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1024 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1045 => [[['_route' => 'searchRoomx', '_controller' => 'App\\Controller\\RoomController::searchRoomx'], [], null, null, false, false, null]],
        1083 => [[['_route' => 'ReservationVol_show', '_controller' => 'App\\Controller\\ReservationVolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1097 => [[['_route' => 'ReservationVol_edit', '_controller' => 'App\\Controller\\ReservationVolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1106 => [[['_route' => 'ReservationVol_delete', '_controller' => 'App\\Controller\\ReservationVolController::delete'], ['id_res'], ['DELETE' => 0], null, false, true, null]],
        1140 => [[['_route' => 'utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1159 => [[['_route' => 'utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1176 => [[['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1199 => [[['_route' => 'searchStudentx', '_controller' => 'App\\Controller\\UtilisateurController::searchUser'], [], null, null, false, false, null]],
        1229 => [[['_route' => 'updateVoyage', '_controller' => 'App\\Controller\\VoyageController::updateVoyage'], ['id'], null, null, false, true, null]],
        1255 => [[['_route' => 'vol_show', '_controller' => 'App\\Controller\\VolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1269 => [[['_route' => 'vol_edit', '_controller' => 'App\\Controller\\VolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1278 => [[['_route' => 'vol_delete', '_controller' => 'App\\Controller\\VolController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1310 => [
            [['_route' => 'deleteVoyage', '_controller' => 'App\\Controller\\VoyageController::deleteVoyage'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
