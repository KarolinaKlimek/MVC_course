<?php

use Mvc\Http\Request\Request;
use Mvc\Http\Routing\Router;

require __DIR__ .'/../loaders/boot.php';
require __DIR__ . '/../routes/web.php';

$request = new Request();
$router = new Router($_SERVER['REQUEST_URI'], null, $request);
$router->run();


