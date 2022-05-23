<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class BookController
{
    public static function index()
    {
        $entityManager = getEntityManager();
        $books = $entityManager->getRepository('App\\Models\\Books')->findAll();
        return response()->view('Book/index.html.twig',['title'=> 'Books', 'books' => $books]);
    }
}
