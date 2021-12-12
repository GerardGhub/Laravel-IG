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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::post('/follow/{user}','FollowController@store');
Route::get('/', 'PostsController@index ');
Route::post('/p', 'PostsController@store');


Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

//   /*
 // Route::get('/home', 'HomeController@index')->name('home');/*