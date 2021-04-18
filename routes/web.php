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

// Route::get('/post','PostController@index')->name('post.index');
// Route::get('/post/create','PostController@create')->name('post.create');
// Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');

// Route::post('/post/store','PostController@store')->name('post.store');
// Route::get('/post/show/{id}','PostController@show')->name('post.show');
// Route::delete('/post/{id}','PostController@delete')->name('post.delete');
// Route::put('/post','PostController@update')->name('post.update');
// Route::patch('/post','PostController@update')->name('post.update');


Route::resource('/post','PostController');


// laravel_test
// Route::get('/post','PostController@index')->name('post.index');
// Route::get('/post/create','PostController@create')->name('post.create');
// Route::post('/post/store','PostController@store')->name('post.store');
// Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
// Route::delete('/post','PostController@delete')->name('post.delete');
// Route::get('/post/show/{id}','PostController@show')->name('post.show');
// Route::put('/post/update','PostController@update')->name('post.update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
