<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Books;
use Mvc\Http\Request\Request;
use Mvc\Validation\Validation;

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
        $errors = [];

        if(!empty($request->postAll())) {
            $validation = new Validation([
                'name' =>['required' => true, 'min' => 3, 'max' => 255],
                'description' => ['required' => true, 'min' => 3, 'max' => 455],
                'recaptcha' => ['recaptcha' => true]
            ], $request->postAll());

            if($validation->passesOrFail()) {
                $entityManager = getEntityManager();
                $book = new Books();

                $book->setName($request->post('name'));
                $book->setDescription($request->post('description'));

                $entityManager->persist($book);
                $entityManager->flush();

                return response()->redirect('/');
            }

            $errors = $validation->getErrors();
        }

        return response()->view('Book/create.html.twig', ['title' => 'Add book','book' =>$request->postAll(), 'errors' => $errors]);
    }

    public static function update(Request $request)
    {


        $entityManager = getEntityManager();
        $book = $entityManager->getRepository('App\\Models\\Books')->find($request->get('id'));

        if($book && !empty($request->postAll())) {
            $validation = new Validation([
                'name' =>['required' => true, 'min' => 3, 'max' => 255],
                'description' => ['required' => true, 'min' => 3, 'max' => 455],
                'recaptcha' => ['recaptcha' => true]
            ], $request->postAll());

            if($validation->passesOrFail()) {
                $book->setName($request->post('name'));
                $book->setDescription($request->post('description'));

                $entityManager->flush($book);

                return response()->redirect('/');
            }

            $errors = $validation->getErrors();
            return response()->view('Book/update.html.twig', ['title' => 'Update book', 'book' => $request->postAll(), 'errors' => $errors]);
        }


        return response()->view('Book/update.html.twig', ['title' => 'Update book', 'book' => $book]);
    }

    public static function destroy(Request $request)
    {
        $entityManager = getEntityManager();
        $book = $entityManager->getRepository('App\\Models\\Books')->find($request->get('id'));

        if($book) {
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return response()->redirect('/');
    }
}
