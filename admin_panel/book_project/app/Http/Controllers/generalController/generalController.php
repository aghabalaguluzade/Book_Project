<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Books;
use App\Models\Category;
use App\Models\FeatureSection;
use App\Models\NewsletterSubscribe;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Partners;
use App\Models\Review;
use App\Models\Settings;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class generalController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->active()->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        $cards = ShopCart::where('user_id',Auth::id())->get();
        $carts = ShopCart::where('user_id',Auth::id());
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts,
        ]);
    }

    public function templates() {
        $this->fragmented();
        $banners = Banner::all();
        $blogs = Blog::createby()->get();
        $books = Books::orderBy('created_at','desc')->get();
        $reviews = Review::inRandomOrder()->orderBy('created_at','desc')->get();
        $fictions = Books::all();
        $features = FeatureSection::all();
        
        //Best Selling

        $items = DB::table('orderitem')->select('books_id', DB::raw('COUNT(books_id) as count'))->groupBy('books_id')->orderBy("count","desc")->get();
        $product_ids = [];
        foreach($items as $item) {
            array_push($product_ids, $item->books_id);
        }

        $idsImplodedSellings = implode(',',array_fill(0,count($product_ids), '?'));
        
        $best_sellings = Books::whereIn('id',$product_ids)->orderByRaw("field(id,{$idsImplodedSellings})",$product_ids)->get();
        // Best Rating 
        
        $items_rated = DB::table('review')->select('books_id', DB::raw('AVG(rating) as count'))->groupBy('books_id')->orderBy("count","desc")->get();
        $product_ids = [];
        foreach($items_rated as $item) {
            array_push($product_ids, $item->books_id);
        }

        $idsImploded = implode(',',array_fill(0,count($product_ids), '?'));
        
        $best_rated = Books::whereIn('id',$product_ids)->orderByRaw("field(id,{$idsImploded})",$product_ids)->get();
        
        View::share([
            'banners' => $banners,
            'blogs' => $blogs,
            'books' => $books,
            'reviews' => $reviews,
            'fictions' => $fictions,
            'features' => $features,
            'best_sellings' => $best_sellings,
            'best_rated' => $best_rated
        ]);
        return view('templates.index');
    }

    public function newsletterSubscribe(Request $request) {

        NewsletterSubscribe::create([
            'subscribe_email' => $request->email
        ]);
    }

    public function CategoryProduct(Request $request,$id,$slug) {
        $this->fragmented();
            $products = Books::where('category_id',$id)->get();
            $title = Category::find($id); 
        View::share([
            'products' => $products,
            'title' => $title,
        ]);
        return view('templates.product-search');
    }

}
