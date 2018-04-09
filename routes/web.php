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

/*
    for profile, you need a parameter
    so pagimplement mo ng view for profile edit make sure the route link is '/profile/{id}', function($id)
    for now it's /profile pag testing lang :)
*/

Route::get('/profile', function(){
    return "Hello this is profile route";
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/promote/{email}', 'AdminController@promoteToAdmin')->name('promote');

Route::get('/admin/delete/{email}', 'AdminController@removeUser')->name('delete');

Route::get('/admin/products/delete/{sku}', 'AdminController@removeProduct')->name('remove_product');

Route::get('/admin/products/', 'AdminController@viewAllProducts')->name('product_view');

<<<<<<< HEAD
Route::resource('admin', 'AdminController');

Route::resource('item', 'ItemsController');

=======

Route::get('/items', 'ItemsController@viewAll')->name('items');
Route::get('/items/top', 'ItemsController@viewTop')->name('top');
Route::get('/items/pants', 'ItemsController@viewPants')->name('pants');
Route::get('/items/shorts', 'ItemsController@viewTop')->name('shorts');
Route::get('/items/hoodies', 'ItemsController@viewPants')->name('hoodies');

Route::resource('admin', 'AdminController');
>>>>>>> newbrancch
