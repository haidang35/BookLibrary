<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAll(Request $request) {
        $search = $request->get("book_name");
        $select_author = $request->get("select_author");
        $available = $request->get("select_available");
        $books = Book::with("Author")->search($search)->author($select_author)->available($available)->paginate(20);
        $authors = Author::all();
        return view("book.list", [
            "books" => $books,
            "authors" => $authors
        ]);
    }
}
