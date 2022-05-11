<?php

namespace App\Http\Controllers\BlogsController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogViewCount;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class BlogsTemplateController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        $cards = ShopCart::where('user_id',Auth::id())->get();
        $carts = ShopCart::where('user_id',Auth::id());
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts
        ]);
}

    public function Bloq(Request $request) {
        $this->fragmented();
        if($request->has("search")) {
            $search = $request->search;
            $blogs = Blog::where('title','LIKE','%'.$search.'%')->paginate(1);
        }else {
            $blogs = Blog::orderBy('created_at','desc')->paginate(1);
        }
        $blogs_archive = Blog::whereDate('created_at', Carbon::today())->get();
        $blogs_count = Blog::all();
        View::share([
            'blogs' => $blogs,
            'blogs_archive' => $blogs_archive,
            'blogs_count' => $blogs_count
        ]);
        return view('templates.blog');
    }

    public function BloqContent($slug) {
        $this->fragmented();
        $blogs = Blog::where('slug',$slug)->get();
        Blog::where('slug',$slug)->increment('view_count');
        View::share([
            'blogs' => $blogs,
        ]);
        return view('templates.blog-content');
    }
}