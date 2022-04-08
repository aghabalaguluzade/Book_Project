<?php

namespace App\Http\Controllers\BooksController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Writers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BooksAddController extends Controller
{
    public function BooksAdd() {
        $writers = Writers::all();
        $main_category = Category::where("parent_id",0)->get();
        View::share([
            'writers'=>$writers,
            'main_category'=>$main_category
        ]);
        return view("books.books-add");
    }

    public function BooksAddPost(Request $request) {
        $request->validate([
            'books_name' => 'required|max:500',
            'books_description' => 'required',
            'books_img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024'
        ]);

        $image = $request->file('books_img');
        $directory = 'uploads/books/';
        $img_name = Str::slug($request->books_name)."." . $image->getClientOriginalExtension();
        $image->move($directory,$img_name);
        $img_name = $directory.$img_name;

        $books = Books::create([
            'writer_id' => $request->writer_id,
            'category_id' => $request->category_id,
            'books_name' => $request->books_name,
            'slug' => Str::slug($request->books_name),
            'books_description' => $request->books_description,
            'books_img' => $img_name
        ]);

        return redirect()->back()->with($books ? "success" : "error", true);

    }
}
