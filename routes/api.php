<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('api\v1')->group(function() {
    Route::get('/products', 'ProductController@index');
    Route::post('/product', 'ProductController@store');
    Route::get('/product/{id}', 'ProductController@show');

    Route::get('/promotions', 'PromotionController@index');
    Route::post('/promotion', 'PromotionController@store');
    Route::get('/promotion/{id}', 'PromotionController@show');
});
