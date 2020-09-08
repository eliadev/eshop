<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use Cart;
use Mail;
use App\Category;
use App\Product;
use App\Order;
use App\OrderItem;
use App\Address;
use App\User;
use Illuminate\Http\Request;
use App\Mail\OrderPlaced;

class OrderController extends Controller
{
    /*
            - A user can have multiple addresses ( address:user_id)
            - order can have multiple addresses (2: billing & shipping)
            - Remove address_id from order
            - order manyToMany addresses relation: address_order table
            - order->addresses()
     */
    

    public function index(Request $request)
    {
		$latestOrder = Order::orderBy('created_at','DESC')->firstOrNew();
		$order_number = '#'.'CO'.date('Y').'-'.str_pad($latestOrder->id + 1, 8, "0", STR_PAD_LEFT);
		$paymentStatus = 'pending';

        // Insert into orders table
        $order = Order::create([
			'order_number' => $order_number,
			'user_id' => auth()->user() ? auth()->user()->id : null,
			'order_status' => $request->order_status,
			'grand_total' => $request->grand_total, 
			'item_count' => $request->item_count,
			'payment_status' => $paymentStatus,
			'payment_method' => $request->payment_method,
        ]);

        // Insert into order_item table
        foreach (\Cart::getContent() as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
        }
		
		Mail::send(new OrderPlaced($order));
		Cart::clear();

        return redirect()->route('front.successful', $order->id)->with('success', 'Order Placed Successfuly!');
    }
	
	public function successful(Order $order)
    {
        return view('front.successful', compact('order'));
    }
}