<?php

use Illuminate\Support\Facades\Route;

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


Route::get('yun','App\Http\Controllers\XuexiController@index');
Route::post('qq','App\Http\Controllers\XuexiController@post');


//后台登陆页面
Route::get('user','App\Http\Controllers\Admin\IndexController@index');