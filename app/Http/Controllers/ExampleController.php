<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ExampleController
{

    public static function index()
    {
        return response()->view('index.html.twig');
    }
}
