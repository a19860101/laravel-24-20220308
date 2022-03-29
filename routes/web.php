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
// Route::get('post','PostController@index')->name('post.index');
// Route::get('post/create','PostController@create')->name('post.create');
// Route::post('post','PostController@store')->name('post.store');
// Route::get('post/{id}','PostController@show')->name('post.show');
// Route::delete('post/{id}','PostController@destroy')->name('post.destroy');
// Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
// Route::put('post/{id}','PostController@update')->name('post.update');

// Route::resource('post','PostController');

Route::group(['middleware'=>'auth'],function(){
    Route::resource('post','PostController')->except('index','show');
});
Route::resource('post','PostController')->only('index','show');

Route::resource('category','CategoryController')->middleware('auth');

Route::get('test',function(){
    return view('test');
});

Route::resource('admin/product','ProductController');
Route::get('product','ProductController@list');
Route::get('removeCover/{product}','ProductController@removeCover')->name('removeCover');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

