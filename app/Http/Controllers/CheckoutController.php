<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
		return view('front.checkout');
    }
	
    public function placeOrder(Request $request)
    {
        $order = $this->orderRepository->storeOrderDetails($request->all());
 
        dd($order);
    }
}