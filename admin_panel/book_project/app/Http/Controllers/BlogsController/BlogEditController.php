<?php

namespace App\Http\Controllers\BlogsController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogEditController extends Controller
{
    public function BlogEditIndex($id) {
        $data = Blog::find($id);
        if(!$data) return redirect()->back()->with("not_found", true);
        return view('blogs.blog_edit', compact('data'));
    }

    public function BlogEdit(Request $request) {

        $request->validate([
            'title' => "required|max:255",
            'author' => "required|max:255",
            'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
        ]);

        $data = Blog::find($request->id);
        if(!$data) return redirect()->route('BlogList')->with("not_found", true);

        if($request->hasFile("img")) {

            $image = $request->file('img');
            $directory = 'uploads/blog/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();
            
            if(file_exists($data->img)) {
                unlink($data->img);
            }
            
            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $data->img = $img_name;
        }

            $data->title = $request->title;
            $data->author = $request->author;
            $data->status = $request->status;
            $data->contents = $request->contents;

            return redirect()->back()->with($data->save() ? "success" : "error", true);

    }
}
