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
        '/course' => [[['_route' => 'app_course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/coursenew' => [[['_route' => 'app_course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/courseUser' => [[['_route' => 'app_course_user', '_controller' => 'App\\Controller\\CourseUserController::index'], null, null, null, false, false, null]],
        '/courses' => [[['_route' => 'course_list', '_controller' => 'App\\Controller\\CourseUserController::list'], null, null, null, false, false, null]],
        '/HomeUser' => [[['_route' => 'app_HomeUser', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/TeamDetails' => [[['_route' => 'app_TeamDetails', '_controller' => 'App\\Controller\\DefaultController::teamdet'], null, null, null, false, false, null]],
        '/Team' => [[['_route' => 'app_Team', '_controller' => 'App\\Controller\\DefaultController::team'], null, null, null, false, false, null]],
        '/HomeMedecin' => [[['_route' => 'app_HomeMedecin', '_controller' => 'App\\Controller\\DefaultController::homeMed'], null, null, null, false, false, null]],
        '/exercice' => [[['_route' => 'app_exercice_index', '_controller' => 'App\\Controller\\ExerciceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/exercice_new' => [[['_route' => 'app_exercice_new', '_controller' => 'App\\Controller\\ExerciceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/E_lexercices' => [[['_route' => 'app_exercice_e', '_controller' => 'App\\Controller\\ExerciceENController::index'], null, ['GET' => 0], null, false, false, null]],
        '/generate-content' => [[['_route' => 'generate_content', '_controller' => 'App\\Controller\\GenerationController::generateContent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/user/([^/]++)/(?'
                    .'|edit(*:35)'
                    .'|delete(*:48)'
                .')'
                .'|/course(?'
                    .'|Det([^/]++)(*:77)'
                    .'|/download/([^/]++)(*:102)'
                    .'|show([^/]++)(*:122)'
                    .'|([^/]+)edit(*:141)'
                    .'|/([^/]++)(?'
                        .'|(*:161)'
                        .'|/like(*:174)'
                    .')'
                .')'
                .'|/exercice_cours([^/]++)(*:207)'
                .'|/([^/_]++)_edit(*:230)'
                .'|/exercice(?'
                    .'|([^/]++)(*:258)'
                    .'|(\\d+)(*:271)'
                    .'|(\\d+)/response(*:293)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        48 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        77 => [[['_route' => 'course_details', '_controller' => 'App\\Controller\\CoursDetailsContorller::index'], ['id'], null, null, false, true, null]],
        102 => [[['_route' => 'course_download', '_controller' => 'App\\Controller\\CoursDetailsContorller::downloadPdf'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'app_course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        141 => [[['_route' => 'app_course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        161 => [[['_route' => 'app_course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        174 => [[['_route' => 'course_like', '_controller' => 'App\\Controller\\CourseUserController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        207 => [[['_route' => 'app_exercice_by_course', '_controller' => 'App\\Controller\\ExerciceController::indexByCourse'], ['courseId'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceDetController::show'], ['id'], null, null, false, true, null]],
        293 => [
            [['_route' => 'app_response_create', '_controller' => 'App\\Controller\\ExerciceDetController::createResponse'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
