<?php

namespace App\Http\Controllers\WishListController;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListAddController extends Controller
{
    public function WishListAdd(Request $request, $id) {
        if(!Auth::id()) return redirect(route('LoginIndex'))->with("login","error",true);

        $wishlists = Wishlist::where('books_id',$id)->where('user_id',Auth::id())->first();

        if($wishlists) {
            $wishlists->quantity += $request->quantity;
        }else {
            $wishlists = new Wishlist();
            $wishlists->user_id = Auth::id();
            $wishlists->books_id = $request->id;
        }
        return redirect()->back()->with($wishlists->save() ? "wishlist-add" : "wishlist-add-error",true);
    } 
}
