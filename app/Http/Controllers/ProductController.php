<?php

namespace App\Http\Controllers;

use DB;
use App;
use Auth;
use App\tag;
use App\ProductAttribute;
use App\Attribute;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
		$categories = Category::all();
		$products = Product::all();
		return view('front.products', ['categories' => $categories, 'products' => $products]);
    }

	public function show($id)
    {
    	//DB::connection()->enableQueryLog();
		$categories = Category::all();
		$product = Product::with(['productAttributes', 'tags', 'productAttributes.attribute'])->find($id);

		//dd($product->toArray());

		$relatedProducts = Product::whereHas('tags', function ($q) use ($product) {
			return $q->whereIn('name', $product->tags->pluck('name'));
		})->where('id', '!=', $product->id)->get();

		//$queries = DB::getQueryLog();
		//dd($queries);
		return view('front.product-details', ['categories' => $categories, 'product' => $product, 'relatedProducts' => $relatedProducts]);
    }
}
