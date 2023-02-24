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
        '/admin/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::__construct'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/admin/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quizz' => [[['_route' => 'quizz_index', '_controller' => 'App\\Controller\\QuizzController::index'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/newCategorie' => [[['_route' => 'quizz_new_categorie', '_controller' => 'App\\Controller\\QuizzController::newCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quizz/newQuestion' => [[['_route' => 'quizz_new_question', '_controller' => 'App\\Controller\\QuizzController::newQuestion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quizz/newReponse' => [[['_route' => 'quizz_new_response', '_controller' => 'App\\Controller\\QuizzController::newReponse'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/quizz/history' => [[['_route' => 'admin_quizz_history', '_controller' => 'App\\Controller\\QuizzHistoryController::index'], null, null, null, false, false, null]],
        '/quizz/session/history' => [[['_route' => 'quizz_history_sessions', '_controller' => 'App\\Controller\\QuizzHistoryController::sessionHistory'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/admin/reponse' => [[['_route' => 'reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reponse/new' => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|categorie/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|question/([^/]++)(?'
                        .'|(*:250)'
                        .'|/(?'
                            .'|edit(*:266)'
                            .'|getByCategorie(*:288)'
                        .')'
                        .'|(*:297)'
                    .')'
                    .'|reponse/([^/]++)(?'
                        .'|(*:325)'
                        .'|/edit(*:338)'
                        .'|(*:346)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:371)'
                        .'|/edit(*:384)'
                        .'|(*:392)'
                    .')'
                .')'
                .'|/profile/([^/]++)/edit(?'
                    .'|Mail(*:431)'
                    .'|Password(*:447)'
                .')'
                .'|/quizz/(?'
                    .'|([^/]++)/show(*:479)'
                    .'|history/([^/]++)(*:503)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        250 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'question_get', '_controller' => 'App\\Controller\\QuestionController::getByCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        297 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        431 => [[['_route' => 'profile_edit_mail', '_controller' => 'App\\Controller\\ProfileController::editMail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        447 => [[['_route' => 'profile_edit_password', '_controller' => 'App\\Controller\\ProfileController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        479 => [[['_route' => 'quizz_get', '_controller' => 'App\\Controller\\QuizzController::getQuizz'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        503 => [
            [['_route' => 'quizz_history', '_controller' => 'App\\Controller\\QuizzHistoryController::userHistory'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
