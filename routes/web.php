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
Route::group(['middleware' => ['auth']], function () {
    /**
     * Users
     */
    // Route::group(['prefix' => 'users'], function () {
    //     Route::get('/data', 'UsersController@anyData')->name('users.data');
    //     Route::get('/taskdata/{id}', 'UsersController@taskData')->name('users.taskdata');
    //     Route::get('/leaddata/{id}', 'UsersController@leadData')->name('users.leaddata');
    //     Route::get('/clientdata/{id}', 'UsersController@clientData')->name('users.clientdata');
    // });
    Route::resource('users', 'UsersController');
});
Route::get('/home', 'HomeController@index')->name('home');
