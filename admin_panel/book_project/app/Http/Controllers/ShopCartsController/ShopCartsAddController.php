<?php

namespace App\Http\Controllers\ShopCartsController;

use App\Http\Controllers\Controller;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartsAddController extends Controller
{
    public function ShopCartAdd(Request $request,$id) {

        $card = ShopCart::where('books_id',$id)->where('user_id',Auth::id())->first();
        if ($card) {
            $card->quantity += $request->quantity;
        } else {
            $card = new ShopCart();
            $card->user_id = Auth::id();
            $card->books_id = $request->id;
            $card->quantity = $request->quantity;   
        }
        
        return redirect()->back()->with($card->save() ? "card-add" : "card-add-error", true);
    }
}
