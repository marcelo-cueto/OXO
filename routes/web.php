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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/slip', 'productController@slipList');
Route::get('/boxer', 'productController@boxerList');
Route::get('/miniboxer', 'productController@miniboxerList');
Route::get('/products', 'productController@list');
Route::get('/product/{id}', 'productController@listById');
Route::post('/addToCart/{id}', 'productController@addToCart');
Route::get('/checkout', 'productController@checkout');
Route::post("/checkout", "productController@finishCheckout")->middleware("auth");
Route::get("/search", "productController@search");
Route::get("/agregarProducto","productController@index");
Route::post("/agregarProducto","productController@addProduct");
Route::get("/pago", "productcontroller@index");
