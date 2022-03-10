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
Route::get('about',function(){
    return view('about');
});
Route::get('service',function(){
    return view('service');
});
Route::get('post','PostController@index')->name('post.index');
Route::get('post/create','PostController@create')->name('post.create');
Route::post('post','PostController@store')->name('post.store');
Route::get('post/{id}','PostController@show')->name('post.show');
