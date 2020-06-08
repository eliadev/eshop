<?php

namespace App\Http\Controllers\Admin;

use App\State;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
	protected $countries;

    public function __construct()
    {
        $this->countries = Country::orderBy('name', 'ASC')->get();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {
        $states = State::with('country')->orderBy('id', 'ASC')->get();
		return view('admin.states.index', ['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.states.create', ['countries' => $this->countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        State::create($request->all());
		session()->flash('message', 'Your record has been added successfully');
		return redirect(route('states.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        return view('admin.states.edit', [ 'state' => $state, 'countries' => $this->countries ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
		$input = $request->all();
        $state->update($input);

		session()->flash('message', 'Your record has been updated successfully');
		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
		if ($state->cities()->count()) {
			return back()->with('messages', 'Cannot Delete: This State has Transactions');
		}
			
        $state->delete();
		session()->flash('message', 'Your record has been deleted successfully');
		return redirect(route('states.index'));
    }
}
