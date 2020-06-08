<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\State;
use App\Country; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
	protected $states;
 
    public function __construct()
    {
        $this->states = State::orderBy('name', 'ASC')->get();
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {
        $cities = City::with('state')->orderBy('id', 'ASC')->get();
		return view('admin.cities.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities.create', ['states' => $this->states]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        City::create($request->all());
		session()->flash('message', 'Your record has been added successfully');
		return redirect(route('cities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
		//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('admin.cities.edit', [ 'city' => $city, 'states' => $this->states ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
		$input = $request->all();	
        $city->update($input);

		session()->flash('message', 'Your record has been updated successfully');
		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
		session()->flash('message', 'Your record has been deleted successfully');
		return redirect(route('cities.index'));
    }
}