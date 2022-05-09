<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAddController extends Controller
{
    public function OrderPost(Request $request) {

        if($this->books_not()) {
            return redirect()->back()->with("order-not-stock");
        }

        $orders = new Order();
        $orders->user_id = Auth::id();
        $orders->name = $request->name;
        $orders->email = $request->email;
        $orders->address = $request->address;
        $orders->phone = $request->phone;
        $orders->total = $request->total;
        $orders->note = $request->note;
        $orders->postcode = $request->postcode;
        $orders->IP = $request->ip();
        $orders->save();

        $cards = ShopCart::where('user_id',Auth::id())->get();
        
        foreach($cards as $card) {

            $order_items = new Orderitem();
            $order_items->user_id = Auth::id();
            $order_items->books_id = $card->books_id;
            $order_items->order_id = $orders->id;
            $order_items->price = $card->books->price;
            $order_items->quantity = $card->quantity;
            $order_items->amount = $card->quantity * $card->books->price;
            $book = Books::find($card->books->id);
            $book->update(['quantity'=>$book->quantity - $card->quantity]);
            $order_items->save();

        }

        $delete_shopcards = ShopCart::where('user_id',Auth::id());
        $delete_shopcards->delete();
        
        return redirect()->route('Orders')->with($order_items ? "order-success" : "order-error");
    }

    public function books_not() {
        
        $carts = ShopCart::where('user_id',Auth::id())->get();

        foreach($carts as $cart) {

            $product = Books::find($cart->books->id);
            
            if($product->quantity < $cart->quantity) {
                return true;
            }
            return false;

        } 

    }
}