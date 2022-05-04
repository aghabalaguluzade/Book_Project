<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Books;
use App\Models\Category;
use App\Models\FeatureSection;
use App\Models\General_Questions;
use App\Models\NewsletterSubscribe;
use App\Models\Partners;
use App\Models\Review;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class generalController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
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
        $blogs = Blog::orderBy('created_at','desc')->get();
        $books = Books::orderBy('created_at','desc')->get();
        $reviews = Review::inRandomOrder()->orderBy('created_at','desc')->get();
        $sections = FeatureSection::all();
        $fictions = Books::all();
        View::share([
            'banners' => $banners,
            'blogs' => $blogs,
            'books' => $books,
            'reviews' => $reviews,
            'sections' => $sections,
            'fictions' => $fictions
        ]);
        return view('templates.index');
    }

    public function newsletterSubscribe(Request $request) {

        NewsletterSubscribe::create([
            'subscribe_email' => $request->email
        ]);
    }

    public function CategoryProduct($id,$slug) {
        $this->fragmented();
        $products = Books::where('category_id',$id)->get();
        return view('templates.product-search',compact('products',$products));
    }

}
