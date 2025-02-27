<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/courses' => [[['_route' => 'courses', '_controller' => 'App\\Controller\\CoursesController::admin'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/det' => [[['_route' => 'app_de', '_controller' => 'App\\Controller\\DetailsController::det'], null, null, null, false, false, null]],
        '/save-quiz-submission' => [[['_route' => 'save_quiz_submission', '_controller' => 'App\\Controller\\Quiz\\QuizSubmissionController::saveSubmission'], null, ['POST' => 0], null, false, false, null]],
        '/AllQuiz' => [[['_route' => 'allQuiz', '_controller' => 'App\\Controller\\Quiz\\QuizWelcomeController::allQuiz'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/quiz(?'
                    .'|/([^/]++)/([^/]++)(*:33)'
                    .'|Question/([^/]++)(*:57)'
                    .'|\\-wait/([^/]++)(*:79)'
                .')'
                .'|/generate\\-quizzes/([^/]++)(*:114)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'quiz', '_controller' => 'App\\Controller\\Quiz\\QuizController::index'], ['matiere', 'userId'], null, null, false, true, null]],
        57 => [[['_route' => 'questions_quiz', '_controller' => 'App\\Controller\\Quiz\\QuizQuestionController::index'], ['quizId'], null, null, false, true, null]],
        79 => [[['_route' => 'quiz_wait', '_controller' => 'App\\Controller\\Quiz\\QuizWaitController::waitPage'], ['userId'], null, null, false, true, null]],
        114 => [
            [['_route' => 'quiz_generate_matiere_ajax', '_controller' => 'App\\Controller\\Quiz\\QuizGeneratorController::generateQuizzes'], ['matiere'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
