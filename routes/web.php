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

Route::get('/admin/promote/{email}', 'AdminController@promoteToAdmin')->name('promote');

Route::get('/admin/delete/{email}', 'AdminController@removeUser')->name('delete');

Route::get('/admin/products/delete/{sku}', 'AdminController@removeProduct')->name('remove_product');

Route::get('/admin/products/', 'AdminController@viewAllProducts')->name('product_view');

Route::get('/admin/products/{id}', 'AdminController@editProductData')->name('product_edit');

Route::get('/admin/purchases/', 'AdminController@viewAllPurchases')->name('purchase_view');

Route::get('/admin/purchases/reject/{id}', 'AdminController@setInvoiceFulfilled')->name('purchase_fulfill');

Route::get('/admin/purchases/fulfill/{id}', 'AdminController@setInvoiceRejected')->name('purchase_reject');

Route::get('/admin/purchases/undo/{id}', 'AdminController@setInvoiceUnfulfilled')->name('purchase_undo');

Route::get('/user/edit/{id}', 'UsersController@edit')->name('user_info');

Route::get('/user/edit/{id}/addresses/', 'UsersController@viewUserAddresses')->name('user_addresses');

Route::get('/user/{id}/add/address', 'AddressesController@create')->name('address_create');

Route::post('/user/{id}/add/address/store', 'AddressesController@store')->name('address_store');

Route::get('/user/edit/{user_id}/address/{id}', 'AddressesController@edit')->name('address_edit');

Route::put('/user/update/{user_id}/address/{id}', 'AddressesController@update')->name('address_update');

Route::get('/user/delete/address/{id}/{address}', 'AddressesController@deleteAddress')->name('address_destroy');

Route::put('/user/edit/submit/{users}', 'UsersController@update')->name('confirm_edit_user');

Route::resource('admin', 'AdminController');

Route::resource('item', 'ItemsController');

Route::get('/items', 'UsersController@viewAll')->name('items');
Route::get('/items/top', 'UsersController@viewTop')->name('top');
Route::get('/items/pants', 'UsersController@viewPants')->name('pants');
Route::get('/items/shorts', 'UsersController@viewShorts')->name('shorts');
Route::get('/items/hoodies', 'UsersController@viewHoodies')->name('hoodies');

Route::get('/items/search/', 'UsersController@search')->name('search');
Route::get('/display/{search}', 'InventoriesController@display')->name('display');