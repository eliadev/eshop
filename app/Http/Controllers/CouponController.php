<?php

namespace App\Http\Controllers;

use Cart;
use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->code)->first();

		if (!$coupon) {
			return back()->with('alert_msg', 'Invalid coupon code! Please try again.');
        }

		session()->put('coupon', [
			'name' => $coupon->code,
			'discount' => $coupon->discount(Cart::getSubTotal()),
		]);

		return back()->with('success_msg', 'Coupon has been Applied.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Coupon $coupon)
    {
        session()->forget('coupon');


		if ($request->ajax()) {
            return response()->json();
		}

		return back()->with('success_msg', 'Coupon has been removed.');
    }
}
