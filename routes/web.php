<?php

use Mvc\Http\Request\Request;
use Mvc\Http\Routing\Route;
use Mvc\Http\Routing\Router;
use App\Http\Controllers;

$routes = new Route();

$routes->set('/', function () {
    Controllers\BookController::index();
});

$routes->set('/books/create', function (Request $request) {
    Controllers\BookController::create($request);
});

$routes->set('/books/update/{id}', function (Request $request) {
    Controllers\BookController::update($request);
}, ['id']);

$router = new Router($_SERVER['REQUEST_URI'], $routes);
