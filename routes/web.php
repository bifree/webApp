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
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//各動画の詳細ページを表示する
Route::get('posts/{id}', 'PostsController@show');
//動画を新規登録する（登録画面とは別です）
Route::post('posts', 'PostsController@store');
//動画を更新する（編集画面とは別です）
Route::put('posts/{id}', 'PostsController@update');
//動画を削除する
Route::delete('posts/{id}', 'PostsController@destroy');