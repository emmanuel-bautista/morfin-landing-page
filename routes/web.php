<?php

use App\Http\Controllers\PageController;

/** @var \Illuminate\Routing\Router $router */

$router->get('/', [PageController::class, 'home']);
$router->get('/about', [PageController::class, 'about']);
$router->get('/offer', [PageController::class, 'offer']);
$router->get('/contact', [PageController::class, 'contact']);
$router->fallback([PageController::class, 'error404']);
