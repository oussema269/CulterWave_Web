<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/nom' => [[['_route' => 'app_nom', '_controller' => 'App\\Controller\\NomController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user/hik' => [[['_route' => 'hik', '_controller' => 'App\\Controller\\UserController::logg'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/newforadmin' => [[['_route' => 'app_user_new-for-admin', '_controller' => 'App\\Controller\\UserController::newforadmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/myaccount' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null]],
        '/user/adminprofile' => [[['_route' => 'app_profil_admin', '_controller' => 'App\\Controller\\UserController::adminprofile'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/user/([^/]++)(?'
                    .'|/(?'
                        .'|desactive(*:37)'
                        .'|adminedit(*:53)'
                        .'|edit(*:64)'
                    .')'
                    .'|(*:72)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:111)'
                    .'|wdt/([^/]++)(*:131)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:177)'
                            .'|router(*:191)'
                            .'|exception(?'
                                .'|(*:211)'
                                .'|\\.css(*:224)'
                            .')'
                        .')'
                        .'|(*:234)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_user_desactive', '_controller' => 'App\\Controller\\UserController::desactive'], ['id'], ['POST' => 0], null, false, false, null]],
        53 => [[['_route' => 'app_user_editadmin', '_controller' => 'App\\Controller\\UserController::Editforadmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        64 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        131 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        177 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        211 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        224 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        234 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
