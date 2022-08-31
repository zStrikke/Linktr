<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// linktr.test/dashboard
Auth::routes();
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {
    Route::get('/links', 'LinkController@index');
    Route::get('/links/new', 'LinkController@create');
    Route::post('/links/new', 'LinkController@store');
    Route::get('/links/{link}', 'LinkController@edit');
    Route::post('/links/{link}', 'LinkController@update');
    Route::delete('/links/{link}', 'LinkController@destroy');

    //Route::resource...

    Route::get('/settings', 'UserController@edit');
    Route::post('/settings', 'UserController@update');
    
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/visit/{link}', 'VisitController@store');
Route::get('/{user}', 'UserController@show');
