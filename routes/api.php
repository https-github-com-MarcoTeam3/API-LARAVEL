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
Route::resource('/user', UserController::class);

//routes to products
Route::resource('/products', ProductController::class);

//routes to category
Route::get('/category/{category}/products', 'CategoryController@products');
Route::resource('/category', CategoryController::class);