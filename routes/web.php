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

Auth::routes();

Route::post('/follow/{userId}', 'FollowsController@store')->name('follow');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/create', 'PostsController@create')->name('post.create');

Route::post('post/store', 'PostsController@store')->name('post.store');

Route::get('post/{id}', 'PostsController@show')->name('post.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::post('/profile/update/', 'ProfilesController@update')->name('profile.update');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');