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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/user/edit' => [[['_route' => 'app_edit_users', '_controller' => 'App\\Controller\\AdminController::editUsers'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/in' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blogsUser' => [[['_route' => 'app_blogs', '_controller' => 'App\\Controller\\BlogsController::index'], null, null, null, false, false, null]],
        '/blogsEns' => [[['_route' => 'app_blogs_ens', '_controller' => 'App\\Controller\\BlogsController::blog'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cours/new' => [[['_route' => 'course_new', '_controller' => 'App\\Controller\\CoursController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/HomeUser' => [[['_route' => 'app_HomeUser', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/TeamDetails' => [[['_route' => 'app_TeamDetails', '_controller' => 'App\\Controller\\DefaultController::teamdet'], null, null, null, false, false, null]],
        '/Team' => [[['_route' => 'app_Team', '_controller' => 'App\\Controller\\DefaultController::team'], null, null, null, false, false, null]],
        '/Courses' => [[['_route' => 'app_Courses', '_controller' => 'App\\Controller\\DefaultController::couses'], null, null, null, false, false, null]],
        '/HomeMedecin' => [[['_route' => 'app_HomeMedecin', '_controller' => 'App\\Controller\\DefaultController::homeMed'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginContController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginContController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
        '/signupPar' => [[['_route' => 'app_signupPar', '_controller' => 'App\\Controller\\SignupController::signupPar'], null, null, null, false, false, null]],
        '/AddUser' => [[['_route' => 'app_AddUser', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/AddParent' => [[['_route' => 'app_AddParent', '_controller' => 'App\\Controller\\UserController::addParent'], null, null, null, false, false, null]],
        '/AddMedecin' => [[['_route' => 'app_AddMedecin', '_controller' => 'App\\Controller\\UserController::addMedecin'], null, null, null, false, false, null]],
        '/AddEnseignant' => [[['_route' => 'app_AddEnseignant', '_controller' => 'App\\Controller\\UserController::addEnseignant'], null, null, null, false, false, null]],
        '/DashboardPar' => [[['_route' => 'app_DashPar', '_controller' => 'App\\Controller\\UserController::dashboardParent'], null, null, null, false, false, null]],
        '/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                .')'
                .'|/admin/user/([^/]++)/(?'
                    .'|edit(*:197)'
                    .'|delete(*:211)'
                .')'
                .'|/(\\d+)(*:226)'
                .'|/(\\d+)/edit(*:245)'
                .'|/(\\d+)(*:259)'
                .'|/cours/(?'
                    .'|(\\d+)(*:282)'
                    .'|([^/]++)/(?'
                        .'|edit(*:306)'
                        .'|delete(*:320)'
                    .')'
                .')'
                .'|/details_blog([^/]++)(*:351)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:395)'
                .'|/verify\\-email/([^/]++)(*:426)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'app_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        211 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        226 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_detailscours', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        351 => [[['_route' => 'app_details_blog', '_controller' => 'App\\Controller\\DetailsBlogController::index'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        426 => [
            [['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SignupController::verifyEmail'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
