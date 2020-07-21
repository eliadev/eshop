<?php

namespace App\Http\Controllers;

use App;
use Auth;
use App\User;
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
	
	public function update(Request $request, $id)
	{
		$user = User::find($id);
		/*$this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);*/

		$input = $request->all();
		$user->fill($input)->save();
		//$user->update($request->all());
		
		session()->flash('message', 'Your record has been updated successfully');
		return redirect()->back();
	}
}
