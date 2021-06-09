<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class APIBookController extends Controller
{
    public function index()
    {
        // select books from the database
        $books = Book::orderBy('title')->get();

        // return the collection object as JSON
        return $books;
    }

    public function show($book_id)
    {
        // find a book by its id
        $book = Book::findOrFail($book_id);

        // return the Eloquent object as JSON
        return $book;
    }
}