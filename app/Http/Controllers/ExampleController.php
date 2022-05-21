<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ExampleController
{
    //jest to metoda statyczna, ponieważ dla controllerów nie ma potrzeby tworzenia instancji,
    //używamy tylko metod z tego
    public static function index()
    {
        echo 'test';
    }
}
