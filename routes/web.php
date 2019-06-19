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
Route::get('/user',function () {
    return '日向雏田';
});
Route::group(['namespace' => 'Admin'] , function (){
   Route::get('goods','IndexController@index');
   Route::post('goods','IndexController@index');
   Route::put('goods/{id}','IndexController@index');
});
Route::group(['namespace' => 'Test'],function (){
    Route::get('lol','IndexController@list');
    Route::put('lol/{id}','IndexController@edit');
    Route::post('lol','IndexController@add');
    Route::delete('lol/{id}','IndexController@del');
});
