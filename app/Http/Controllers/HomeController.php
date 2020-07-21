<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use Session;
use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\GuestLoginRequest;

class HomeController extends Controller
{
    public function index()
    {
		$categories = Category::all();
		$products = Product::where('featured', 1)->where('published', 1)->get();
        return view('front.index', ['products' => $products, 'categories'  => $categories]);
    }
	
	public function login()
    {
        return view('front.login');
    }

    public function doLogin(GuestLoginRequest $request)
    {
        $valid =  Auth::guard()->attempt(
            $request->only('email', 'password')
        );
        
        if($valid)
        {
            $user = User::where('email', $request->email)->first();
            Auth::login($user, true);
            return redirect('/');
        }

        return redirect()->route('front.login')->with('status', 'Invalid login credentials');
    }
}