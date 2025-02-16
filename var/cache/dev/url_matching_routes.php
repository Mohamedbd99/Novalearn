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
        '/admin/reclamation' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\AdminReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/HomeUser' => [[['_route' => 'app_HomeUser', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/TeamDetails' => [[['_route' => 'app_TeamDetails', '_controller' => 'App\\Controller\\DefaultController::teamdet'], null, null, null, false, false, null]],
        '/Team' => [[['_route' => 'app_Team', '_controller' => 'App\\Controller\\DefaultController::team'], null, null, null, false, false, null]],
        '/Courses' => [[['_route' => 'app_Courses', '_controller' => 'App\\Controller\\DefaultController::couses'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\HomeController::reclamation'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginContController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginContController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/success' => [[['_route' => 'app_reclamation_success', '_controller' => 'App\\Controller\\ReclamationController::success'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/reclamation/mes-reclamations' => [[['_route' => 'app_reclamation_mes_reclamations', '_controller' => 'App\\Controller\\ReclamationController::mesReclamations'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|user/([^/]++)/(?'
                        .'|edit(*:38)'
                        .'|delete(*:51)'
                    .')'
                    .'|reclamation/([^/]++)(?'
                        .'|(*:82)'
                        .'|/(?'
                            .'|edit(*:97)'
                            .'|delete(*:110)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        51 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        82 => [[['_route' => 'admin_reclamation_show', '_controller' => 'App\\Controller\\AdminReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\AdminReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        110 => [
            [['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\AdminReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
