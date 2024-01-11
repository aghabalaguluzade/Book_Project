<?php

namespace App\Http\Controllers\BooksController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Review;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BooksTemplateController extends Controller
{
    public function fragmented()
    {
        $categories = Category::where('parent_id', 0)->where('status', '1')->get();
        $partners = Partners::where('status', '1')->inRandomOrder()->get();
        $settings = Settings::all();
        $carts = ShopCart::where('user_id', Auth::id());
        $cards = ShopCart::where('user_id', Auth::id())->get();
        $wishlists = Wishlist::latest('created_at')->get();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts,
            'wishlists' => $wishlists,
        ]);
    }

    public function BooksProduct($slug)
    {
        $this->fragmented();
        $slugs = Books::where('slug', $slug)->get();
        $relate_books = Books::where('slug', $slug)->first();
        $relate = $relate_books->category_id;
        $related = Books::where('slug', '!=', $slug)->where('category_id', $relate)->get();
        // $reviews = Review::where('books_id',$relate_books->id)->paginate(1);
        $reviews = Review::where('books_id', $relate_books->id)->get();
        $rating = Review::where('books_id', $relate_books->id)->sum('rating');
        if ($reviews->count() > 0) {
            $rating_value = $rating / $reviews->count();
        } else {
            $rating_value = 0;
        }
        View::share([
            'slugs' => $slugs,
            'related' => $related,
            'reviews' => $reviews,
            'rating_value' => $rating_value,
        ]);

        return view('templates.product-details');
    }

    public function BooksReviewPost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'review' => 'required',
            'rating' => 'required',
        ]);

        $review = Review::create([
            'books_id' => $request->books_id,
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
        ]);

        return redirect()->back();

    }
}
