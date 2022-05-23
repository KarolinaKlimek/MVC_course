<?php

use Mvc\Http\Request\Request;
use Mvc\Http\Routing\Route;
use Mvc\Http\Routing\Router;
use App\Http\Controllers;

$routes = new Route();

$routes->set('/', function () {
    Controllers\BookController::index();
});


$router = new Router($_SERVER['REQUEST_URI'], $routes);
