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

Route::get('/guest/login', 'HomeController@login')->name('front.login');
Route::post('/guest/doLogin', 'HomeController@doLogin')->name('front.doLogin');

Route::get('/profile/{id}', 'UserController@show')->name('front.profile.show');
Route::put('/profile/{user}', 'UserController@update')->name('front.profile.update');

Route::get('products/', 'ProductController@index')->name('front.products');
Route::get('/product/{id}/{slug}', 'ProductController@show')->name('front.product.show');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('users', 'UserController');
	Route::resource('brands', 'BrandController');
	Route::resource('countries', 'CountryController');
	Route::resource('states', 'StateController');
	Route::resource('cities', 'CityController');
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
});