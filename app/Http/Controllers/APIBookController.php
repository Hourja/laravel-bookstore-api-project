<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

class APIBookController extends Controller
{
    public function index()
    {
        $my_books = Book::get();

        return $my_books;
    }


    public function show($id)
    {

        $selected_book = Book::where('id', '=', $id)->first();

        return $selected_book;
    }
}
