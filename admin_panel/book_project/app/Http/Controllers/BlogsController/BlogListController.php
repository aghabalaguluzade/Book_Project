<?php

namespace App\Http\Controllers\BlogsController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogListController extends Controller
{
    public function BlogList() {
        $blogs = Blog::all();
        View::share('blogs', $blogs);
        return view('blogs.blog_list');
    }

    public function BlogView(Request $request) {
        $data = Blog::find($request->id);
        return $data ?? null;
    }

    public function BlogDelete($id) {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $data = Blog::find($id);

        if($data) {
            if(file_exists($data->img)) {
                unlink($data->img);
            }
            return redirect()->back()->with($data->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }

}
