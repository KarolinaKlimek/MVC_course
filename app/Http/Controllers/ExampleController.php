<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ExampleController
{

    public static function index()
    {
        return response()->view('main/about.html.twig', [
            'title' => 'About me!',
            'entries' => [
                0 => [
                    'title' => 'entry 1',
                    'description' => 'lorem ipsum',
                    'hidden' => true
                ],
                1 => [
                    'title' => 'entry 2',
                    'description' => 'lorem ipsum 2',
                    'hidden' => false
                ]
            ]
    ]);
    }
}
