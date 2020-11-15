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
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@all')->name('cart');
Route::get('/cart/create/{movie_id}', 'CartController@create');
Route::get('/cart/buy/{movie_id}', 'CartController@buy');
Route::get('/cart/upgrade/{movie_id}', 'CartController@upgrade');
Route::get('/cart/cancel/{movie_id}', 'CartController@cancel');

Route::get('/movie/create', 'MovieController@create')->middleware('role:admin');
Route::post('/movie/store', 'MovieController@store')->middleware('role:admin');
Route::get('/movie/edit/{id}', 'MovieController@edit')->middleware('role:admin');
Route::put('/movie/update/{id}', 'MovieController@update')->middleware('role:admin');
Route::get('/movie/delete/{id}', 'MovieController@delete')->middleware('role:admin');
Route::get('/movie/{id}', 'MovieController@index');

Route::get('logout', function (){
    Auth::logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');