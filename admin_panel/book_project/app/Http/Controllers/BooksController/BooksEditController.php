<?php

namespace App\Http\Controllers\BooksController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Writers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BooksEditController extends Controller
{
    public function BooksEdit($id) {
        $books = Books::find($id);
        $writers = Writers::all();
        $main_category = Category::where('parent_id',0)->get();
        // $main_category = Category::find($id);
        if(!$books) return redirect()->back()->with("not_found", true);
        View::share('books',$books);
        View::share('main_category',$main_category);
        View::share('writers',$writers);
        return view('books.books-edit');
    }

    public function BooksEditPost(Request $request) {
        $request->validate([
            'books_name' => 'required|max:500',
            'books_img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            'price' => 'regex:/^\d+(\.\d{1,2})?$/|numeric|between:0,99.99',
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

        $books->category_id = $request->category_id;
        $books->writer_id = $request->writer_id;
        $books->books_name = $request->books_name;
        $books->books_description = $request->books_description;
        $books->price = $request->price;
        $books->old_price = $request->old_price;
        
        if($books->old_price &&  $books->old_price > 0) {
            $books->old_price = Str::slug($request->price);
        }
        $books->price = Str::slug($request->old_price);
        return redirect()->back()->with($books->save() ? "success" : "error", true);

    }

}
