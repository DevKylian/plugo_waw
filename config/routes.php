<?php

const ROUTES = [
    'home' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'home',
    ],
    'register' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'register',
    ],
    'login' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'login',
    ],
    'logout' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'logout',
    ],
    'allRoadTrip' => [
        'controller' => App\Controller\RoadTripController::class,
        'method' => 'allRoadTrip'
    ],
];