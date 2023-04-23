<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_nom' => [[], ['_controller' => 'App\\Controller\\NomController::index'], [], [['text', '/nom']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/user/logout']], [], [], []],
    'makenewpassword' => [[], ['_controller' => 'App\\Controller\\UserController::makenewpassword'], [], [['text', '/user/makenewpassword']], [], [], []],
    'forgetpassword' => [[], ['_controller' => 'App\\Controller\\UserController::forgetpassword'], [], [['text', '/user/forgetpassword']], [], [], []],
    'hik' => [[], ['_controller' => 'App\\Controller\\UserController::logg'], [], [['text', '/user/hik']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_new-for-admin' => [[], ['_controller' => 'App\\Controller\\UserController::newforadmin'], [], [['text', '/user/newforadmin']], [], [], []],
    'app_user_show' => [[], ['_controller' => 'App\\Controller\\UserController::show'], [], [['text', '/user/myaccount']], [], [], []],
    'app_profil_admin' => [[], ['_controller' => 'App\\Controller\\UserController::adminprofile'], [], [['text', '/user/adminprofile']], [], [], []],
    'sendmail' => [[], ['_controller' => 'App\\Controller\\UserController::sendmail'], [], [['text', '/user/sendmail']], [], [], []],
    'app_user_desactive' => [['id'], ['_controller' => 'App\\Controller\\UserController::desactive'], [], [['text', '/desactive'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_editadmin' => [['id'], ['_controller' => 'App\\Controller\\UserController::Editforadmin'], [], [['text', '/adminedit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\NomController::index'], [], [['text', '/']], [], [], []],
];
