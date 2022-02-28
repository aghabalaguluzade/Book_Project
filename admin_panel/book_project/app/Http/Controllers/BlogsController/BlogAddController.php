<?php

namespace App\Http\Controllers\BlogsController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogAddController extends Controller
{
    public function BlogAddIndex() {
        return view('blogs.blog_add');
    }

    public function BlogAddPost(Request $request) {
        
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            'contents' => 'required'
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/blog/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();
            $image->move($directory,$img_name);
            $img_name = $directory . $img_name;

            $data = Blog::create([
                'title' => $request->title,
                'author' => $request->author,
                'img' => $img_name,
                'contents' => $request->contents
            ]);

            return redirect()->back()->with($data ? "success" : "error", true);
           
        }
    }
}