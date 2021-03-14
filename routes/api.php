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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// User
Route::post('register', 'JournalistsController@store');
Route::post('login', 'JournalistsController@login');

Route::get('login', function() {
    return response()->json(['error' => 'Unauthorized'], 401);
})->name('login');

Route::group(['middleware' => 'auth:api'], function() {
    
    Route::post('me', 'JournalistsController@me');

    // News
    Route::group(['prefix' => 'news'], function() {
        Route::post('create', 'NewsController@store');
        Route::post('update/{id}', 'NewsController@update');
        Route::post('delete/{id}', 'NewsController@delete');
        Route::get('me', 'NewsController@index');
        Route::get('type/{type_id}', 'NewsController@type');
    });
    
    // Type News
    Route::group(['prefix' => 'type'], function() {
        Route::post('create', 'TypesController@store');
        Route::post('update/{id}', 'TypesController@update');
        Route::post('delete/{id}', 'TypesController@delete');
        Route::get('me', 'TypesController@index');
    });
    
});