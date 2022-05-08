<?php

namespace App\Http\Controllers\ShopCartsController;

use App\Http\Controllers\Controller;
use App\Models\ShopCart;
use Illuminate\Http\Request;

class ShopCartsEditController extends Controller
{
    public function ShopCartDelete($id) {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();
        
        $card = ShopCart::find($id);
        return redirect()->back()->with($card->delete() ? "card-delete" : "error",true);
    }
}
