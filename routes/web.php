<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('front.home');
Route::get('/home', 'HomeController@index')->name('front.home');
Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');

//Login
Route::get('/guest/login', 'HomeController@login')->name('front.login');
Route::post('/guest/doLogin', 'HomeController@doLogin')->name('front.doLogin');

//User Account
Route::get('/profile', 'UserController@show')->name('front.profile.show');
Route::post('/update-profile', 'UserController@update')->name('front.profile.update');
Route::post('/address', 'UserController@storeAddress')->name('front.address');

//Product
Route::get('products/', 'ProductController@index')->name('front.products');
Route::get('/product/{id}/{slug}', 'ProductController@show')->name('front.product.show');

//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

//Checkout & Order
Route::middleware(['auth' => 'verified'])->group(function () {
	Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
	Route::post('order', 'OrderController@index')->name('order.index');
	Route::get('order/{order}', 'OrderController@successful')->name('front.successful');
});

//Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('checkout.place.order');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('users', 'UserController');
	Route::resource('brands', 'BrandController');
	Route::resource('countries', 'CountryController');
	Route::resource('states', 'StateController');
	Route::resource('cities', 'CityController');
	Route::resource('attributes', 'AttributeController');
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::resource('orders', 'OrderController');
	Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
	
	Route::get('customers', 'CustomerController@index')->name('customers.index');
	Route::get('customers-show/{id}', 'CustomerController@show')->name('customers.show');
	Route::post('customers/{id}/delete', 'CustomerController@destroy')->name('customers.destroy');

});
