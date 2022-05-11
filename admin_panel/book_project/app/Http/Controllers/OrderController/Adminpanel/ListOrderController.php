<?php

namespace App\Http\Controllers\OrderController\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class ListOrderController extends Controller
{
    public function AllOrdersIndex() {
        $orders = Order::all();
        return view('orders.all-orders-list', compact('orders',$orders));
    }

    public function AllOrdersEdit($id) {
        $orderitems = Orderitem::where('order_id',$id)->get();
        return view('orders.all-orders-edit', compact('orderitems',$orderitems));
    }

    public function AllOrdersEditPost(Request $request, $id) {
        $orderitems = Order::find($id);

        $orderitems->status = $request->status;
        $orderitems->note = $request->note;
        
        return redirect()->back()->with($orderitems->save() ? "success" : "error", true);

    }

    public function NewOrdersIndex() {
        $orders = Order::where('status','Yeni')->get();
        return view('orders.new-orders-list', compact('orders',$orders));
    }

    public function AcceptOrdersIndex() {
        $orders = Order::where('status','Qəbul edildi')->get();
        return view('orders.accept-orders-list', compact('orders',$orders));
    }

    public function CancelOrdersIndex() {
        $orders = Order::where('status','Rədd edildi')->get();
        return view('orders.cancel-orders-list', compact('orders',$orders));
    }

    public function ShippingOrdersIndex() {
        $orders = Order::where('status','Göndərildi')->get();
        return view('orders.shipping-orders-list', compact('orders',$orders));
    }

    public function CompleteOrdersIndex() {
        $orders = Order::where('status','Tamamlandı')->get();
        return view('orders.complete-orders-list', compact('orders',$orders));
    }

}
