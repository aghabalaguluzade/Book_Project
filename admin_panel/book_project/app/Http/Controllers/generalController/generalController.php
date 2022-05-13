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
use App\Models\Partners;
use App\Models\Review;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\User;
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


        if($categories) {
            $subCategories = Category::where('parent_id',26)->get();
            foreach($subCategories as $subcat) {
                $cat_ids[] = $subcat->id;
            }
            $productsAll = Books::whereIn('category_id',$cat_ids)->get();
        }else {
            $productsAll = Books::where('category_id',26)->get();
        }

        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts
        ]);
    }

    public function index() {
        $orders = Order::where('status','Yeni')->get();
        $users = User::all();
        $books = Books::all();
        $reviews = Review::all();
        $blogs = Blog::all();
        View::share([
            'orders' => $orders,
            'users' => $users,
            'books' => $books,
            'reviews' => $reviews,
            'blogs' => $blogs
        ]);
        return view('index');
    }

    public function templates() {
        $this->fragmented();
        $banners = Banner::all();
        $blogs = Blog::createby()->get()->take(5);
        $books = Books::orderBy('created_at','desc')->get();
        $reviews = Review::inRandomOrder()->orderBy('created_at','desc')->get();
        $features = FeatureSection::all();
        $categories = Category::where('parent_id',0)->active()->get();

        if($categories) {
            $subCategories1 = Category::where('parent_id',26)->get();
            foreach($subCategories1 as $subcat1) {
                $cat_ids1[] = $subcat1->id;
            }
            $fictions = Books::whereIn('category_id',$cat_ids1)->get();
        }

        if($categories) {
            $subCategories2 = Category::where('parent_id',16)->get();
            foreach($subCategories2 as $subcat2) {
                $cat_ids2[] = $subcat2->id;
            }
            $nonfictions = Books::whereIn('category_id',$cat_ids2)->get();
        }

        if($categories) {
            $subCategories3 = Category::where('parent_id',10)->get();
            foreach($subCategories3 as $subcat3) {
                $cat_ids3[] = $subcat3->id;
            }
            $childrenliteratures = Books::whereIn('category_id',$cat_ids3)->get();
        }



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

        $most_reads = Blog::get()->sortByDesc('view_count')->take(5);

        View::share([
            'banners' => $banners,
            'blogs' => $blogs,
            'books' => $books,
            'reviews' => $reviews,
            'fictions' => $fictions,
            'features' => $features,
            'best_sellings' => $best_sellings,
            'best_rated' => $best_rated,
            'most_reads' => $most_reads,
            'nonfictions' => $nonfictions,
            'childrenliteratures' => $childrenliteratures
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
