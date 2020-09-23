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
		$discount = session()->get('coupon')['discount'] ?? 0;
		$newSubTotal = (Cart::getSubTotal() - $discount);
		$newTotal = $newSubTotal;

        return view('front.cart', [
				'cartCollection' => $cartCollection,
				'discount' => $discount,
				'newSubTotal' => $newSubTotal,
				'newTotal' => $newTotal
		]);
    }

	public function add(Request $request)
	{
        $arr = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image,
            'slug' => $request->slug,
        ];

        Cart::add($arr)->associate('App\Product');

		if ($request->ajax()) {
            return response()->json($arr);
		}
        //return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
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
        session()->forget('coupon');
        Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }
}
