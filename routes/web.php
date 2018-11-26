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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// drivers group
Route::group(['prefix' => 'drivers'], function () {

    # drivers index
    Route::get('/', [
        'uses' => 'DriversController@index',
        'as' => 'drivers',
    ]);

    # drivers add
    Route::get('create', [
        'uses' => "DriversController@create",
        'as' => 'add-driver',
    ]);

    # drivers post add
    Route::post('post-drivers', [
        'uses' => 'DriversController@store',
        'as' => 'post-driver',
    ]);

    # drivers Edit
    Route::get('/edit/{id}', [
        'uses' => 'DriversController@edit',
        'as' => 'get-edit-driver',
    ]);

    # drivers post update
    Route::post('postupdate/{id}', [
        'uses' => 'DriversController@update',
        'as' => 'post-update-driver',
    ]);

    # drivers delete
    Route::get('/delete/{id}', [
        'uses' => 'DriversController@destroy',
        'as' => 'destroy-driver',
        'title' => '  ',
    ]);

});

Route::group(['prefix' => 'children'], function () {

    # drivers index
    Route::get('/', [
        'uses' => 'ChildrenController@index',
        'as' => 'children',
    ]);

    # drivers add
    Route::get('create', [
        'uses' => "ChildrenController@create",
        'as' => 'add-child',
    ]);

    # drivers post add
    Route::post('post-child', [
        'uses' => 'ChildrenController@store',
        'as' => 'post-child',
    ]);



});

Route::group(['prefix' => 'bus'], function () {

    # drivers index
    Route::get('/', [
        'uses' => 'BusesController@index',
        'as' => 'bus',
    ]);

    Route::get('/direction/{id}', [
        'uses' => 'BusesController@direction',
        'as' => 'direction',
    ]);

    # drivers add
    Route::get('create', [
        'uses' => "BusesController@create",
        'as' => 'add-bus',
    ]);

    # drivers post add
    Route::post('post-bus', [
        'uses' => 'BusesController@store',
        'as' => 'post-bus',
    ]);



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
