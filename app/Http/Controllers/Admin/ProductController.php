<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Product;
use App\Sku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	protected $categories;
	protected $brands;
	protected $skus;

    public function __construct()
    {
        $this->categories = Category::all();
		$this->brands = Brand::all();
		$this->skus = Sku::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories', 'brand')->get();
		return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', ['categories' => $this->categories, 'brands' => $this->brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data = $request->all();
		$product = Product::create($data);
		$product->skus()->createMany($data['addmore']);

		if(!$request->get('published'))
            $request['published'] = 0;

		if(!$request->get('featured'))
            $request['featured'] = 0;

		$product->categories()->sync($request->categories);

		session()->flash('message', 'Your record has been added successfully');
		return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [ 'product' => $product, 'categories' => $this->categories, 'brands' => $this->brands, 'skus' => $this->skus ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // @TODO: check request merge for possible refactor
		if(!$request->get('published'))
            $request['published'] = 0;

		if(!$request->get('featured'))
            $request['featured'] = 0;

		$product->categories()->sync($request->categories);

		
		$data = $request->all();
		$product->update($data);
		$product->skus()->updateOrCreate($data['addmore']);
		
		session()->flash('message', 'Your record has been updated successfully');
		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
		session()->flash('message', 'Your record has been deleted successfully');
		return redirect(route('products.index'));
    }
}
