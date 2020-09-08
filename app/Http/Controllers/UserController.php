<?php

namespace App\Http\Controllers;

use App;
use Auth;
use App\User;
use App\Address;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function show()
    {
		if(!Auth::check())
        {
            return redirect()->route('front.login')->with('status', 'Login before Accessing your Account!');
        }
		
		$user = Auth::user();
		$addresses = $user->addresses()->get();
		
    	return view('front.account', ['user' => $user, 'addresses' => $addresses ]);
    }
	
	public function update(Request $request)
	{
		if(!Auth::check())
        {
            return redirect()->route('front.login')->with('status', 'Login before Accessing your Account!');
        }
		
		/*$this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);*/

		$user = Auth::user();
		
		$input = $request->all();
        if(!$request->get('password'))
            $input['password'] = $user->password;
        else
            $input['password'] = Hash::make($request->get('password'));

        $user->update($input);
		
		session()->flash('message', 'Your record has been updated successfully');
		return redirect( route('front.profile.show') );
	}
	
	public function storeAddress(Request $request)
	{
		$this->validate($request, [
				'fname' => 'required',
				'lname' => 'required',
				'phone' => 'required',
				'address1' => 'required',
				'address2' => 'required',
				'user_id' => 'required',
		]);

		Address::create([
				'fname' => $request->fname,
				'lname' => $request->lname,
				'phone' => $request->phone,
				'address1' => $request->address1,
				'address2' => $request->address2,
				'user_id' => $request->user_id,
		]);
		
		session()->flash('message', 'Your Address has been added successfully');
        return redirect( route('front.profile.show') );
    }
}
