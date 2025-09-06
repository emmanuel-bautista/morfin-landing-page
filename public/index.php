<?php

use Jenssegers\Blade\Blade;
use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$blade = new Blade(__DIR__ . '/../views', __DIR__ . '/../cache');
$router = new Router(new Dispatcher(), new Container());

$router->get('/', function() use ($blade){
    return $blade->render('home');
});

$router->get('/about', function() use ($blade){
    return $blade->render('about');
});

$router->get('/offer', function() use ($blade){
    return $blade->render('offer');
});

$router->get('/contact', function() use ($blade){
    return $blade->render('contact');
});

$router->fallback(function() use ($blade){
    return $blade->render('error404');
});

$request = Request::capture();
$response = $router->dispatch($request);
$response->send();
