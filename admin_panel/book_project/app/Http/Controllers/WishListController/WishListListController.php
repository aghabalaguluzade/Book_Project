<?php

namespace App\Http\Controllers\WishListController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class WishListListController extends Controller
{
    public function fragmented()
    {
        $categories = Category::where('parent_id', 0)->active()->get();
        $partners = Partners::where('status', '1')->inRandomOrder()->get();
        $settings = Settings::all();
        $cards = ShopCart::where('user_id', Auth::id())->get();
        $carts = ShopCart::where('user_id', Auth::id());
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

    public function WishListList()
    {
        $this->fragmented();
        $wishlists = Wishlist::latest('created_at')->get();

        return view('templates.wishlist.wishlist-list', compact('wishlists', $wishlists));
    }

    public function WishListDelete($id)
    {
        $referer = isset($_SERVER['HTTP_REFERER']);
        if (! $referer) {
            return redirect()->back();
        }

        $wishlists = Wishlist::find($id);

        return redirect()->back()->with($wishlists->delete() ? 'wishlist-delete' : 'error', true);
    }
}
