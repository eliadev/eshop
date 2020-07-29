<?php

namespace App\Http\Controllers;

use App;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
		if(!Auth::check())
        {
            return redirect()->route('front.login')->with('status', 'Login before Accessing your Account!');
        }
		
		$user = Auth::user();
    	return view('front.account', ['user' => $user ]);
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
}
