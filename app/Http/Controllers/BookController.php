<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAll() {
        $books = Book::all();
        return view("book.list", [
            "books" => $books
        ]);
    }
}
