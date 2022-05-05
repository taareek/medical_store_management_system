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
    return view('home');
});

Route::view('/about', 'about');
// Route::view('/contact', 'contact');
Route::get('medicines', 'MedicinesController@index');
// Route::get('medicines', function () {
//     return view('medicines.index');
// });
Route::get('medicines/create', 'MedicinesController@create');
Route::post('medicines', 'MedicinesController@store');
Route::get('medicines/{medicine}', 'MedicinesController@show');
Route::get('medicines/{medicine}/edit', 'MedicinesController@edit');
Route::patch('medicines/{medicine}', 'MedicinesController@update');
Route::delete('medicines/{medicine}', 'MedicinesController@destroy');

//Shortcut for RESTful Controller
// Route::resource('medicines', 'MedicinesController');

//Store Employee
Route::get('store_users', 'StoreController@index');
Route::get('store_users/create', 'StoreController@create');
Route::post('store_users', 'StoreController@store');
Route::get('store_users/{store_user}', 'StoreController@show');
Route::get('store_users/{store_user}/edit', 'StoreController@edit');
Route::patch('store_users/{store_user}', 'StoreController@update');
Route::delete('store_users/{store_user}', 'StoreController@destroy');

//Orders 
Route::get('orders', 'OrderController@index');
Route::get('orders/create', 'OrderController@create');
Route::post('orders', 'OrderController@store');
Route::get('orders/{order}', 'OrderController@show');
Route::get('orders/{order}/edit', 'OrderController@edit');
Route::patch('orders/{order}', 'OrderController@update');
Route::delete('orders/{order}', 'OrderController@destroy');

// Location Rack

//Mnufracturer

//Categories

// sales
// Route::view('/sales', 'sales');
Route::get('sales', 'Sales@index');
Route::get('sales/monthly', [App\Http\Controllers\Sales::class, 'monthlyStatistics'])->name('sales/monthly');
