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
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login/error' => [[['_route' => 'security_login_error', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/trick/add' => [[['_route' => 'addTrick', '_controller' => 'App\\Controller\\TrickController::addTrick'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\TrickController::displayAllTricks'], null, null, null, false, false, null]],
        '/trick/displayAllTricks' => [[['_route' => 'displayAllTricks', '_controller' => 'App\\Controller\\TrickController::displayAllTricks'], null, null, null, false, false, null]],
        '/modifyProfile' => [[['_route' => 'modifyProfile', '_controller' => 'App\\Controller\\UserProfileController::modifyProfile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:204)'
                .'|/trick/(?'
                    .'|modify/([^/]++)(*:237)'
                    .'|d(?'
                        .'|elete/([^/]++)(*:263)'
                        .'|isplayTrick/([^/]++)(*:291)'
                    .')'
                    .'|loadMore(?'
                        .'|Comments/([^/]++)(?:/([^/]++))?(*:342)'
                        .'|Tricks(?:/([^/]++))?(*:370)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        204 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        237 => [[['_route' => 'modifyTrick', '_controller' => 'App\\Controller\\TrickController::modifyTrick'], ['slug'], null, null, false, true, null]],
        263 => [[['_route' => 'deleteTrick', '_controller' => 'App\\Controller\\TrickController::deleteTrick'], ['slug'], null, null, false, true, null]],
        291 => [[['_route' => 'displayTrick', '_controller' => 'App\\Controller\\TrickController::displayTrick'], ['slug'], null, null, false, true, null]],
        342 => [[['_route' => 'loadMoreComments', 'start' => 10, '_controller' => 'App\\Controller\\TrickController::loadMoreComments'], ['idTrick', 'start'], null, null, false, true, null]],
        370 => [
            [['_route' => 'loadMoreTricks', 'start' => 5, '_controller' => 'App\\Controller\\TrickController::loadMoreTricks'], ['start'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
