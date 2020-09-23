<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use Cart;
use App\User;
use App\Category;
use App\Product;
use App\Address;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
		$discount = session()->get('coupon')['discount'] ?? 0;
		$newSubTotal = (Cart::getSubTotal() - $discount);
		$newTotal = $newSubTotal * 1;
		
        // @TODO: refactor to CheckoutMiddleware including these 2 checks
		if(!Auth::check())
        {
            return redirect()->route('front.login')->with('status', 'Login before checkout!');
        }
		
		if(Cart::isEmpty())
        {
            return redirect()->route('front.products');
        }
		
		$user = Auth::user();
		$addresses = $user->addresses()->get();
		
		return view('front.checkout', [
				'user' => $user,
				'addresses' => $addresses,
				'discount' => $discount,
				'newSubTotal' => $newSubTotal,
				'newTotal' => $newTotal
		]);
    }
}