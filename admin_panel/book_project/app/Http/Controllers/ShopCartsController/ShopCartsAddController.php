<?php

namespace App\Http\Controllers\ShopCartsController;

use App\Http\Controllers\Controller;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartsAddController extends Controller
{
    public function ShopCartAdd(Request $request) {

        $card = ShopCart::find(1);
        $card->user_id = Auth::id();
        $card->books_id = $request->id;
        $card->quantity = $request->quantity;
        
        return redirect()->back()->with($card->save() ? "card" : "error", true);
    }
}
