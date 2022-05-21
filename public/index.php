<?php

use Mvc\Http\Request\Request;
use Mvc\Http\Routing\Router;

require __DIR__ .'/../loaders/boot.php';
require __DIR__ . '/../routes/web.php';

$request = new Request();
$router = new Router($_SERVER['REQUEST_URI'], null, $request);
$router->run();




//pierwsza wersja
//require __DIR__ . '/../vendor/autoload.php';
//require __DIR__. '/../src/helpers.php';
//
//$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
//$dotenv->load();
//
////echo $_ENV['APP_NAME'];
////echo env(key: 'APP_NAME', default: 'MVC');
//echo config('app.name');

//kolejna wersja
//echo $_SERVER['REQUEST_URI'];
//if($_SERVER['REQUEST_URI'] == '/')
//    echo 'Homepage';
//else
//    echo 'Another site';
