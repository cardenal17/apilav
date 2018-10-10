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



//Route::get('api/v2/soldaduras','SoldaduraController@index');
//Route::get('api/v1/soldaduras/{id}','SoldaduraController@show');
//Route::post('api/v1/soldaduras','SoldaduraController@store');
//Route::put('api/v1/soldaduras','SoldaduraController@edit');
//Route::delete('api/v1/soldaduras','SoldaduraController@getsol');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
