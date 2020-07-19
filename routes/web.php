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
Route::any('index/loginout','F1\WuYuController@loginout');
Route::group(['prefix' => 'login', 'namespace' => 'F1'], function(){
     Route::any('index','WuYuController@index');
     Route::any('login','WuYuController@login');
});
Route::group(['prefix' => 'index', 'namespace' => 'Index'], function(){
     Route::any('index','IndexController@index');
});
