<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
		if(!Auth::check())
        {
            return redirect()->route('front.login')->with('status', 'Login before checkout!');
        }
		
		if(Cart::isEmpty())
        {
            return redirect()->route('front.products');
        }
		
		$user = Auth::user();

		return view('front.checkout', ['user' => $user]);
    }
	
    public function placeOrder(Request $request)
    {
        
    }
}