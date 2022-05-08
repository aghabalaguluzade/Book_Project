<?php

namespace App\Http\Controllers\ShopCartsController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ShopCartsListController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        $carts = ShopCart::find(Auth::id());
        $cards = ShopCart::where('user_id',Auth::id())->get();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts
        ]);
    }

    public function ShopCartList() {
        $this->fragmented();
        $cards = ShopCart::where('user_id',Auth::id())->get();
        return view('templates.shop-carts.shop-carts-list', compact('cards',$cards));
    }
}
