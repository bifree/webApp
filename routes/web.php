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

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('sidebar','')->name('commons.sidebar');


//ユーザー情報に関するルーティング
Route::get('users/{id}', 'UsersController@show');

//投稿に関するルーティング
Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/edit', 'PostsController@update')->name('posts.edit');
Route::get('posts/delete', 'PostsController@destroy')->name('posts.delete');

//いいね機能に関するルーティング
Route::post('favorites','FavoriteController@store')->name('favorites');
Route::post('unfavorites','FavoriteController@destroy')->name('unfavorites');