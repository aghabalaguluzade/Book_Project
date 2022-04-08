<?php

namespace App\Http\Controllers\BooksController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BooksListController extends Controller
{
    public function BooksList() {
        $books = Books::all();
        View::share('books', $books);
        return view('books.books-list');
    }
}
