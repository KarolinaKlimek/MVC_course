<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Books;
use Mvc\Http\Request\Request;

class BookController
{
    public static function index()
    {
        $entityManager = getEntityManager();
        $books = $entityManager->getRepository('App\\Models\\Books')->findAll();
        return response()->view('Book/index.html.twig',['title'=> 'Books', 'books' => $books]);
    }

    public static function create(Request $request)
    {
        if(!empty($request->postAll())) {
            $entityManager = getEntityManager();
            $book = new Books();

            $book->setName($request->post('name'));
            $book->setDescription($request->post('description'));

            $entityManager->persist($book);
            $entityManager->flush();

            return response()->redirect('/');
        }

        return response()->view('Book/create.html.twig', ['title' => 'Add book']);
    }
}
