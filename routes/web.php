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
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('templates.home');
});

Route::get('/register', function () {
    return view('templates.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('templates.login');
})->name('login');

Route::get('/cus', function () {
	return view('frontend.dashboardcus');
})->name('dashboardcus');





Auth::routes();

Route::get('/product', 'ProdukController@index')->name('produk');
Route::get('/product/create', 'ProdukController@create')->name('produk.create');
Route::post('/product/create', 'ProdukController@store')->name('produk.store');
Route::get('/product/edit/{id}', 'ProdukController@edit')->name('produk.edit');
Route::patch('/product/edit/{id}', 'ProdukController@update')->name('produk.update');
Route::get('/product/hapus/{id}', 'ProdukController@destroy')->name('produk.hapus');

Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/pemesan', 'PemesanController@index')->name('pemesan');

Route::get('/produkcus', 'ProdukcusController@index')->name('produkcus');
Route::get('/pesan', 'ProdukcusController@pesan')->name('produkcus.pesan');