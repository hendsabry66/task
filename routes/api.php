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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'drivers'], function () {

    # drivers index
    Route::get('/', [
        'uses' => 'API\DriversController@index',
        'as' => 'drivers',
    ]);



    # drivers post add
    Route::post('post-drivers', [
        'uses' => 'API\DriversController@store',
        'as' => 'post-driver',
    ]);


    # drivers post update
    Route::post('postupdate/{id}', [
        'uses' => 'API\DriversController@update',
        'as' => 'post-update-driver',
    ]);

    # drivers delete
    Route::get('/delete/{id}', [
        'uses' => 'API\DriversController@destroy',
        'as' => 'destroy-driver',
        'title' => '  ',
    ]);

});
