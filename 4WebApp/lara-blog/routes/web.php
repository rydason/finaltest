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

// Route::get('/sample', function () {
//     return view('sample');
// });

// Route::get('/sample','sampleController@index')->name('sample.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/create', function () {
//     return view('posts.create');
// });

// Route::resource('/posts', 'PostController');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');

Route::put('/posts/{id}', 'PostController@update')->name('posts.update');

Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');

Route::get('/comments/create/{post_id}', 'CommentController@create')->name('comments.create');

Route::post('/comments', 'CommentController@store')->name('comments.store');
