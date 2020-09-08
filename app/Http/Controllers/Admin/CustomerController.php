<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::whereDoesntHave('permissions')->where('is_superadmin', 0)->get();
		return view('admin.customers.index', ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$user = User::find($id);
        $user->delete();
		session()->flash('message', 'Your record has been deleted successfully');
		return redirect(route('customers.index'));
    }
	
	/**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
		return view('admin.customers.show', ['user' => $user]);
    }
}
