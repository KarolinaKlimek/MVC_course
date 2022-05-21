<?php

use Mvc\Http\Routing\Route;
use Mvc\Http\Routing\Router;
use App\Http\Controllers;

$routes = new Route();

//zamiast tego uzywac ładujemy controller
//$routes->set('/', function () {
//    echo 'test';
//});
$routes->set('/', function () {
    Controllers\ExampleController::index();
});

$routes->set('/contact', function () {
    echo 'contact';
});

$routes->set('/entry/{id}/{id2}', function () {
    //echo 'regex działa';
    //print_r($_GET);
    echo $_GET['id'] . ' ' . $_GET['id2'];
}, ['id', 'id2']);

$router = new Router($_SERVER['REQUEST_URI'], $routes);
