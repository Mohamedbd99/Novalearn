<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/user/edit' => [[['_route' => 'app_edit_users', '_controller' => 'App\\Controller\\AdminController::editUsers'], null, null, null, false, false, null]],
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
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
        '/signupPar' => [[['_route' => 'app_signupPar', '_controller' => 'App\\Controller\\SignupController::signupPar'], null, null, null, false, false, null]],
        '/AddUser' => [[['_route' => 'app_AddUser', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/AddParent' => [[['_route' => 'app_AddParent', '_controller' => 'App\\Controller\\UserController::addParent'], null, null, null, false, false, null]],
        '/AddMedecin' => [[['_route' => 'app_AddMedecin', '_controller' => 'App\\Controller\\UserController::addMedecin'], null, null, null, false, false, null]],
        '/AddEnseignant' => [[['_route' => 'app_AddEnseignant', '_controller' => 'App\\Controller\\UserController::addEnseignant'], null, null, null, false, false, null]],
        '/DashboardPar' => [[['_route' => 'app_DashPar', '_controller' => 'App\\Controller\\UserController::dashboardParent'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/user/([^/]++)/(?'
                    .'|edit(*:35)'
                    .'|delete(*:48)'
                .')'
                .'|/(\\d+)(*:62)'
                .'|/(\\d+)/edit(*:80)'
                .'|/(\\d+)(*:93)'
                .'|/cours/(?'
                    .'|(\\d+)(*:115)'
                    .'|([^/]++)/(?'
                        .'|edit(*:139)'
                        .'|delete(*:153)'
                    .')'
                .')'
                .'|/details_blog([^/]++)(*:184)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        48 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        62 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        115 => [[['_route' => 'app_detailscours', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        184 => [
            [['_route' => 'app_details_blog', '_controller' => 'App\\Controller\\DetailsBlogController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
