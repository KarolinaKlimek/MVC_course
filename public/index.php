<?php

require __DIR__ .'/../loaders/boot.php';
require __DIR__ . '/../routes/web.php';

$router = new \Mvc\Http\Routing\Router($_SERVER['REQUEST_URI']);
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
