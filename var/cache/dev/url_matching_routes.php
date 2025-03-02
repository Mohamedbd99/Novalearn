<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null],
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/user/edit' => [[['_route' => 'app_edit_users', '_controller' => 'App\\Controller\\AdminController::editUsers'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reclamation' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\Admin\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chatbot/message' => [[['_route' => 'chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, ['POST' => 0], null, false, false, null]],
        '/HomeUser' => [[['_route' => 'app_HomeUser', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/TeamDetails' => [[['_route' => 'app_TeamDetails', '_controller' => 'App\\Controller\\DefaultController::teamdet'], null, null, null, false, false, null]],
        '/Team' => [[['_route' => 'app_Team', '_controller' => 'App\\Controller\\DefaultController::team'], null, null, null, false, false, null]],
        '/Courses' => [[['_route' => 'app_Courses', '_controller' => 'App\\Controller\\DefaultController::couses'], null, null, null, false, false, null]],
        '/reclamation' => [
            [['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\HomeController::reclamation'], null, null, null, false, false, null],
            [['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginContController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginContController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/success' => [[['_route' => 'app_reclamation_success', '_controller' => 'App\\Controller\\ReclamationController::success'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/reclamation/mes-reclamations' => [[['_route' => 'app_reclamation_mes_reclamations', '_controller' => 'App\\Controller\\ReclamationController::mesReclamations'], null, null, null, false, false, null]],
        '/reclamation/reclamation/mes-reclamations-email' => [[['_route' => 'app_reclamation_mes_reclamations_email', '_controller' => 'App\\Controller\\ReclamationController::mesReclamationsWithEmail'], null, null, null, false, false, null]],
        '/reclamation/reclamation/list' => [[['_route' => 'app_reclamation_list', '_controller' => 'App\\Controller\\ReclamationController::list'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/admin/reclamation' => [[['_route' => 'app_reclamation_admin_index', '_controller' => 'App\\Controller\\ReclamationController::adminIndex'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/admin/search' => [[['_route' => 'admin_reclamation_search', '_controller' => 'App\\Controller\\ReclamationController::adminSearch'], null, ['GET' => 0], null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
        '/signupPar' => [[['_route' => 'app_signupPar', '_controller' => 'App\\Controller\\SignupController::signupPar'], null, null, null, false, false, null]],
        '/AddUser' => [[['_route' => 'app_AddUser', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/AddParent' => [[['_route' => 'app_AddParent', '_controller' => 'App\\Controller\\UserController::addParent'], null, null, null, false, false, null]],
        '/AddMedecin' => [[['_route' => 'app_AddMedecin', '_controller' => 'App\\Controller\\UserController::addMedecin'], null, null, null, false, false, null]],
        '/AddEnseignant' => [[['_route' => 'app_AddEnseignant', '_controller' => 'App\\Controller\\UserController::addEnseignant'], null, null, null, false, false, null]],
        '/DashboardPar' => [[['_route' => 'app_DashPar', '_controller' => 'App\\Controller\\UserController::dashboardParent'], null, null, null, false, false, null]],
        '/mes-reclamations' => [[['_route' => 'user_reclamation_index', '_controller' => 'App\\Controller\\UserReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user-stories' => [[['_route' => 'app_user_stories', '_controller' => 'App\\Controller\\UserStoriesController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|user/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:41)'
                            .'|delete(*:54)'
                        .')'
                        .'|(*:62)'
                    .')'
                    .'|reclamation/(?'
                        .'|reclamation/([^/]++)/pdf(*:109)'
                        .'|([^/]++)(?'
                            .'|(*:128)'
                            .'|/edit(*:141)'
                            .'|(*:149)'
                        .')'
                    .')'
                .')'
                .'|/reclamation/export\\-pdf(?:/([^/]++))?(*:198)'
                .'|/mes\\-reclamations/([^/]++)/edit(*:238)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        54 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        62 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'app_reclamation_pdf', '_controller' => 'App\\Controller\\AdminReclamationController::generatePdf'], ['id'], null, null, false, false, null]],
        128 => [[['_route' => 'admin_reclamation_show', '_controller' => 'App\\Controller\\Admin\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        141 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\Admin\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        149 => [[['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\Admin\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        198 => [[['_route' => 'app_reclamation_export_pdf', 'ids' => null, '_controller' => 'App\\Controller\\ReclamationController::exportPdf'], ['ids'], ['GET' => 0], null, false, true, null]],
        238 => [
            [['_route' => 'user_reclamation_edit', '_controller' => 'App\\Controller\\UserReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
