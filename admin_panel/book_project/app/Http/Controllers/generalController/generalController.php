<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\General_Questions;
use App\Models\Partners;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class generalController extends Controller
{

    public function index() {
        return view('index');
    }

    public function fragmented() {
        $categories = Category::where('parent_id',0)->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
        ]);
    }

    public function templates() {
        $this->fragmented();
        $banners = Banner::all();
        View::share([
            'banners' => $banners
        ]);
        return view('templates.index');

    }

    public function faq() {
        $this->fragmented();
        $questions = General_Questions::inRandomOrder()->get();
        View::share('questions',$questions);
        return view('templates.faq');
    }

    public function contact() {
        $this->fragmented();
        $settings = Settings::all();
        View::share('settings',$settings); 
        return view('templates.contact');
    }

    public function Bloq() {
        $this->fragmented();
        $blogs = Blog::all();
        $blogs_archive = Blog::whereDate('created_at', Carbon::today())->get();
        $blogs_count = Blog::count();
        View::share([
            'blogs' => $blogs,
            'blogs_archive' => $blogs_archive,
            'blogs_count' => $blogs_count
        ]);
        return view('templates.blog');
    }

}
