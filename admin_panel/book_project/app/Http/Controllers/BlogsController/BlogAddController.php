<?php

namespace App\Http\Controllers\BlogsController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogAddController extends Controller
{
    public function BlogAddPost(Request $request) {
        
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            'contents' => 'required'
        ]);

            $image = $request->file('img');
            $directory = 'uploads/blog/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();
            $image->move($directory,$img_name);
            $img_name = $directory . $img_name;

            $data = Blog::create([
                'title' => $request->title,
                'author' => $request->author,
                'img' => $img_name,
                'contents' => $request->contents,
                'slug' => Str::slug($request->title)
            ]);

            return redirect()->back()->with($data ? "success" : "error", true);
    
    }
}