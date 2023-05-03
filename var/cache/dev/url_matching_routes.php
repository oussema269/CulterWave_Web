<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/nom' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\EvennementController::index'], null, null, null, false, false, null],
            [['_route' => 'app_nom', '_controller' => 'App\\Controller\\NomController::index'], null, null, null, false, false, null],
        ],
        '/read' => [[['_route' => 'app_read2', '_controller' => 'App\\Controller\\EvennementController::read2'], null, null, null, false, false, null]],
        '/readadmin' => [[['_route' => 'app_readadmin', '_controller' => 'App\\Controller\\EvennementController::read'], null, null, null, false, false, null]],
        '/rechercheadmin' => [[['_route' => 'app_liste_ordonne', '_controller' => 'App\\Controller\\EvennementController::listOrdonne'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'app_liste_ordonnee', '_controller' => 'App\\Controller\\EvennementController::listOrdonnee'], null, null, null, false, false, null]],
        '/participer' => [[['_route' => 'app_participer', '_controller' => 'App\\Controller\\EvennementController::participerEvennement'], null, null, null, false, false, null]],
        '/createadmin' => [[['_route' => 'app_event_createadmin', '_controller' => 'App\\Controller\\EvennementController::createe'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'app_event_create', '_controller' => 'App\\Controller\\EvennementController::create'], null, null, null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating', '_controller' => 'App\\Controller\\RatingController::index'], null, null, null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor', '_controller' => 'App\\Controller\\SponsorController::index'], null, null, null, false, false, null]],
        '/afficher' => [[['_route' => 'app_afficher', '_controller' => 'App\\Controller\\SponsorController::read2'], null, null, null, false, false, null]],
        '/rechercherr' => [[['_route' => 'app_liste_ordonneeee', '_controller' => 'App\\Controller\\SponsorController::listOrdonner'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'app_sponsor_create', '_controller' => 'App\\Controller\\SponsorController::create'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user/rechercher' => [[['_route' => 'app_rechercher', '_controller' => 'App\\Controller\\UserController::rechercher'], null, null, null, false, false, null]],
        '/user/makenewpassword' => [[['_route' => 'makenewpassword', '_controller' => 'App\\Controller\\UserController::makenewpassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/forgetpassword' => [[['_route' => 'forgetpassword', '_controller' => 'App\\Controller\\UserController::forgetpassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/hik' => [[['_route' => 'hik', '_controller' => 'App\\Controller\\UserController::logg'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/newforadmin' => [[['_route' => 'app_user_new-for-admin', '_controller' => 'App\\Controller\\UserController::newforadmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/myaccount' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null]],
        '/user/adminprofile' => [[['_route' => 'app_profil_admin', '_controller' => 'App\\Controller\\UserController::adminprofile'], null, ['GET' => 0], null, false, false, null]],
        '/user/makepdf' => [[['_route' => 'app-make-pdf', '_controller' => 'App\\Controller\\UserController::makepdf'], null, ['GET' => 0], null, false, false, null]],
        '/user/testpdf' => [[['_route' => 'app-test-pdf', '_controller' => 'App\\Controller\\UserController::testpdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/sendmail' => [[['_route' => 'sendmail', '_controller' => 'App\\Controller\\UserController::sendmail'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\NomController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/participerr/([^/]++)(*:28)'
                .'|/e(?'
                    .'|vennement/([^/]++)/note(*:63)'
                    .'|dit(?'
                        .'|admin/([^/]++)(*:90)'
                        .'|/([^/]++)(*:106)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:135)'
                    .'|admin/([^/]++)(*:157)'
                    .'|ee/([^/]++)(*:176)'
                .')'
                .'|/modifier/([^/]++)(*:203)'
                .'|/user/([^/]++)(?'
                    .'|/(?'
                        .'|desactive(*:241)'
                        .'|adminedit(*:258)'
                        .'|edit(*:270)'
                    .')'
                    .'|(*:279)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:319)'
                    .'|wdt/([^/]++)(*:339)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:385)'
                            .'|router(*:399)'
                            .'|exception(?'
                                .'|(*:419)'
                                .'|\\.css(*:432)'
                            .')'
                        .')'
                        .'|(*:442)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_part', '_controller' => 'App\\Controller\\EvennementController::participer'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'app_rate_create', '_controller' => 'App\\Controller\\EvennementController::rate'], ['id'], null, null, false, false, null]],
        90 => [[['_route' => 'app_evennement_editadmin', '_controller' => 'App\\Controller\\EvennementController::editt'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'app_evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EvennementController::delete'], ['id'], null, null, false, true, null]],
        157 => [[['_route' => 'app_event_deleteadmin', '_controller' => 'App\\Controller\\EvennementController::deletee'], ['id'], null, null, false, true, null]],
        176 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::deletee'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'app_user_desactive', '_controller' => 'App\\Controller\\UserController::desactive'], ['id'], ['POST' => 0], null, false, false, null]],
        258 => [[['_route' => 'app_user_editadmin', '_controller' => 'App\\Controller\\UserController::Editforadmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        270 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        339 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        385 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        399 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        419 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        432 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        442 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
