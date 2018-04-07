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
    return view('pages/index');
});

Route::get('/index', function () {
    return view('pages/index');
})->name('index');

Route::get('/items', function () {
    return view('pages/items');
})->name('items');

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/cart', function () {
    return view('pages/cart');
})->name('cart');

Route::get('/products', function () {
    return view('pages/adminproduct');
})->name('products');

Route::get('/purchases', function () {
    return view('pages/adminpurchases');
})->name('purchases');

Route::get('/newadmin', function () {
    return view('auth/createadmin');
})->name('newadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
