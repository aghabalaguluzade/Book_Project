<?php

namespace App\Http\Controllers\ShopCartsController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ShopCartsListController extends Controller
{
    public function fragmented()
    {
        $categories = Category::where('parent_id', 0)->where('status', '1')->get();
        $partners = Partners::where('status', '1')->inRandomOrder()->get();
        $settings = Settings::all();
        $carts = ShopCart::where('user_id', Auth::id());
        $cards = ShopCart::orderBy('created_at', 'desc')->where('user_id', Auth::id())->get();
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

    public function ShopCartList()
    {
        $this->fragmented();
        $cards = ShopCart::where('user_id', Auth::id())->get();

        return view('templates.shop-carts.shop-carts-list', compact('cards', $cards));
    }
}
