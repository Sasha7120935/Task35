<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route:: get('products','ProductController@index') ->name('products');
Route::get('products/{product}','ProductController@show') ->name('products.show');

Route::get('categories/{category}','CategoriesController@show') ->name('categories.show');
Route::get('categories','CategoriesController@index')->name('categories.index');

Route::namespace('Account')->prefix('account')->name('account.')->middleware(['auth'])->group(function (){
Route::get('{user}/edit','UserController@edit')->middleware('can:update,user')->name('user.edit');
Route::put('{user}/edit','UserController@update')->middleware('can:update,user')->name('user.update');
 Route::get('/','UserController@index')->name('main');
});
Route::namespace('Admin')
    ->prefix('admin')
    ->name('admin.')
    ->middleware(['auth','admin'])
    ->group(function () {

 Route::get('/','AdminController@index')->name('dashboard');
 Route::get('orders', 'OrderController@index')->name('orders');
 Route::get('products/create', 'ProductController@create')->name('products.create');
 Route::post('products/store', 'ProductController@store')->name('products.store');
});