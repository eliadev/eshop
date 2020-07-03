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

    public function __construct()
    {
        $this->categories = Category::all();
		$this->brands = Brand::all();
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
		
		// Add Image
		if ($request->image) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $product
                ->addMedia($request->image)
                ->setFileName("product-".$product->id.'.'.$ext)
                ->toMediaCollection('product');
        }
		
		// Add multiple images
        foreach ($request->input('gallery_image', []) as $file) {
            $product->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('gallery');
        }

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
        return view('admin.products.edit', [ 'product' => $product, 'categories' => $this->categories, 'brands' => $this->brands, 'skus' => $product->skus ]);
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
		if($request->has('delete_existing_image'))
            $product->clearMediaCollection('product');
		
        // @TODO: check request merge for possible refactor
		if(!$request->get('published'))
            $request['published'] = 0;

		if(!$request->get('featured'))
            $request['featured'] = 0;

		$product->categories()->sync($request->categories);
		
		if (isset($request->image)) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $product
                ->addMedia($request->image)
                ->setFileName("product-".$product->id.'.'.$ext)
                ->toMediaCollection('product');
        }

        // Remove media files removed by the user on edit Product
        if ( $product->getMedia('gallery')->count()) {
            foreach ($product->getMedia('gallery') as $media) {
                if (!in_array($media->file_name, $request->input('gallery_image', []))) {
                    $media->delete();
                }
            }
        }
        // Add media file added by the user on edit Product
        $media = $product->getMedia('gallery')->pluck('file_name')->toArray();
        foreach ($request->input('gallery_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $product->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('gallery');
            }
        }
		
		$data = $request->all();
		$product->update($data);
        $product->skus()->delete();
		$product->skus()->createMany($data['addmore']);
		
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
	
	/**
     * Handles multiple image updoad.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
