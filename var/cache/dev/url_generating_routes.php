<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_home' => [[], ['_controller' => 'App\\Controller\\EvennementController::index'], [], [['text', '/nom']], [], [], []],
    'app_read2' => [[], ['_controller' => 'App\\Controller\\EvennementController::read2'], [], [['text', '/read']], [], [], []],
    'app_readadmin' => [[], ['_controller' => 'App\\Controller\\EvennementController::read'], [], [['text', '/readadmin']], [], [], []],
    'app_liste_ordonne' => [[], ['_controller' => 'App\\Controller\\EvennementController::listOrdonne'], [], [['text', '/rechercheadmin']], [], [], []],
    'app_liste_ordonnee' => [[], ['_controller' => 'App\\Controller\\EvennementController::listOrdonnee'], [], [['text', '/recherche']], [], [], []],
    'app_participer' => [[], ['_controller' => 'App\\Controller\\EvennementController::participerEvennement'], [], [['text', '/participer']], [], [], []],
    'app_part' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::participer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participerr']], [], [], []],
    'app_event_createadmin' => [[], ['_controller' => 'App\\Controller\\EvennementController::createe'], [], [['text', '/createadmin']], [], [], []],
    'app_event_create' => [[], ['_controller' => 'App\\Controller\\EvennementController::create'], [], [['text', '/create']], [], [], []],
    'app_rate_create' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::rate'], [], [['text', '/note'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_event_delete' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'app_event_deleteadmin' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::deletee'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteadmin']], [], [], []],
    'app_evennement_editadmin' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::editt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editadmin']], [], [], []],
    'app_evennement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'app_nom' => [[], ['_controller' => 'App\\Controller\\NomController::index'], [], [['text', '/nom']], [], [], []],
    'app_rating' => [[], ['_controller' => 'App\\Controller\\RatingController::index'], [], [['text', '/rating']], [], [], []],
    'app_sponsor' => [[], ['_controller' => 'App\\Controller\\SponsorController::index'], [], [['text', '/sponsor']], [], [], []],
    'app_afficher' => [[], ['_controller' => 'App\\Controller\\SponsorController::read2'], [], [['text', '/afficher']], [], [], []],
    'app_liste_ordonneeee' => [[], ['_controller' => 'App\\Controller\\SponsorController::listOrdonner'], [], [['text', '/rechercherr']], [], [], []],
    'app_sponsor_delete' => [['id'], ['_controller' => 'App\\Controller\\SponsorController::deletee'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteee']], [], [], []],
    'app_sponsor_create' => [[], ['_controller' => 'App\\Controller\\SponsorController::create'], [], [['text', '/add']], [], [], []],
    'app_sponsor_edit' => [['id'], ['_controller' => 'App\\Controller\\SponsorController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifier']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/user/logout']], [], [], []],
    'app_rechercher' => [[], ['_controller' => 'App\\Controller\\UserController::rechercher'], [], [['text', '/user/rechercher']], [], [], []],
    'makenewpassword' => [[], ['_controller' => 'App\\Controller\\UserController::makenewpassword'], [], [['text', '/user/makenewpassword']], [], [], []],
    'forgetpassword' => [[], ['_controller' => 'App\\Controller\\UserController::forgetpassword'], [], [['text', '/user/forgetpassword']], [], [], []],
    'hik' => [[], ['_controller' => 'App\\Controller\\UserController::logg'], [], [['text', '/user/hik']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_new-for-admin' => [[], ['_controller' => 'App\\Controller\\UserController::newforadmin'], [], [['text', '/user/newforadmin']], [], [], []],
    'app_user_show' => [[], ['_controller' => 'App\\Controller\\UserController::show'], [], [['text', '/user/myaccount']], [], [], []],
    'app_profil_admin' => [[], ['_controller' => 'App\\Controller\\UserController::adminprofile'], [], [['text', '/user/adminprofile']], [], [], []],
    'app-make-pdf' => [[], ['_controller' => 'App\\Controller\\UserController::makepdf'], [], [['text', '/user/makepdf']], [], [], []],
    'app-test-pdf' => [[], ['_controller' => 'App\\Controller\\UserController::testpdf'], [], [['text', '/user/testpdf']], [], [], []],
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
