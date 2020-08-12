<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
	
    public function index()  
	{
        $cartCollection = Cart::getContent();
        return view('front.cart', ['cartCollection' => $cartCollection]);
    }
	
	public function add(Request $request)
	{  
        Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image,
            'slug' => $request->slug
        ));
		
		if ($request->ajax()) {	
			//return view('front.product_data', compact('products'));
            return response()->json('cart item added');
		}
		
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
	
	public function remove(Request $request)
	{
        Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request)
	{
        Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
		
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }
	
	public function clear()
	{
        Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
