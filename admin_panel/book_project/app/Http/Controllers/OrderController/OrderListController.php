<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class OrderListController extends Controller
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

    public function OrderIndex(Request $request) {
        $this->fragmented();
        $total = $request->input('total');
        return view('templates.shop-carts.checkout',['total'=>$total]);
    }
}
