<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes to user
Route::post('/login', 'LoginController@login');
Route::post('/register', 'RegisterController@register');
Route::post('/logout', 'LoginController@logout')->middleware('auth:api');

//routes to products
Route::get('/products/{product_id}', 'ProductsController@products');
Route::get('/category/{category}/products', 'CategoryController@products');
Route::resource('/products', 'ProductsController');
Route::resource('/category', 'CategoryController');