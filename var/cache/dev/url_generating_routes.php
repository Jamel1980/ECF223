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
    'app_eval' => [[], ['_controller' => 'App\\Controller\\EvalController::index'], [], [['text', '/eval']], [], [], []],
    'app_eval_delete' => [['id'], ['_controller' => 'App\\Controller\\EvalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eval/delete']], [], [], []],
    'app_eval_new' => [['id'], ['_controller' => 'App\\Controller\\EvalController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eval/new']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_individu' => [[], ['_controller' => 'App\\Controller\\IndividuController::index'], [], [['text', '/individu']], [], [], []],
    'app_individu_new' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/new']], [], [], []],
    'app_individu_show' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/show']], [], [], []],
    'app_individu_delete' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/delete']], [], [], []],
    'app_saisir_note' => [[], ['_controller' => 'App\\Controller\\SaisirNoteController::index'], [], [['text', '/saisir/note/']], [], [], []],
    'app_saisir_show' => [['id'], ['_controller' => 'App\\Controller\\SaisirNoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/saisir/note/show']], [], [], []],
    'App\Controller\EvalController::index' => [[], ['_controller' => 'App\\Controller\\EvalController::index'], [], [['text', '/eval']], [], [], []],
    'App\Controller\EvalController::delete' => [['id'], ['_controller' => 'App\\Controller\\EvalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eval/delete']], [], [], []],
    'App\Controller\EvalController::new' => [['id'], ['_controller' => 'App\\Controller\\EvalController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eval/new']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\IndividuController::index' => [[], ['_controller' => 'App\\Controller\\IndividuController::index'], [], [['text', '/individu']], [], [], []],
    'App\Controller\IndividuController::new' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/new']], [], [], []],
    'App\Controller\IndividuController::show' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/show']], [], [], []],
    'App\Controller\IndividuController::delete' => [['id'], ['_controller' => 'App\\Controller\\IndividuController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/individu/delete']], [], [], []],
    'App\Controller\SaisirNoteController::index' => [[], ['_controller' => 'App\\Controller\\SaisirNoteController::index'], [], [['text', '/saisir/note/']], [], [], []],
    'App\Controller\SaisirNoteController::show' => [['id'], ['_controller' => 'App\\Controller\\SaisirNoteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/saisir/note/show']], [], [], []],
];
