<?php

namespace App\Http\Controllers\BooksController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BooksEditController extends Controller
{
    public function BooksEdit($id) {
        $books = Books::find($id);
        $main_category = Category::find($id);
        if(!$books) return redirect()->back()->with("not_found", true);
        View::share('books',$books);
        View::share('main_category',$main_category);
        return view('books.books-edit');
    }

    public function BooksEditPost(Request $request) {
        $request->validate([
            'books_name' => 'required|max:500',
            'books_img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024'
        ]);

        $books = Books::find($request->id);
        if(!$books) return redirect()->route("BooksList")->with("not_found", true);

        if($request->hasFile('books_img')) {
            $image = $request->file('books_img');
            $directory = 'uploads/books/';
            $img_name = Str::slug($request->books_name).'.' . $image->getClientOriginalExtension();

            if(file_exists($books->books_img)) {
                unlink($books->books_img);
            }

            $image->move($directory,$img_name);
            $img_name = $directory.$img_name;
            $books->books_img = $img_name;

        }

        $books->books_name = $request->books_name;
        $books->books_description = $request->books_description;
        
        return redirect()->back()->with($books->save() ? "success" : "error", true);

    }
}
