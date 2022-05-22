<?php

use Mvc\Http\Request\Request;
use Mvc\Http\Routing\Route;
use Mvc\Http\Routing\Router;
use App\Http\Controllers;

$routes = new Route();

$routes->set('/', function () {
    Controllers\ExampleController::index();
});

$routes->set('/contact', function () {
    echo 'contact';
});

$routes->set('/entry/{id}', function (Request $request) {
    response()->json($request->getAll());
}, ['id']);

$router = new Router($_SERVER['REQUEST_URI'], $routes);
