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
//    return view('index');
//});

Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('social.login');
Route::get('/auth/callback/{provider}', 'SocialController@callback');


Auth::routes([
  //  'verify' => true
]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/topic/create', 'TopicController@create')->name('topic')->middleware('auth');
Route::post('/topic','TopicController@store');
Route::get('topic/index','TopicController@index');
Route::get('/topic/{topic}/edit','TopicController@edit');
Route::put('/topic/{topic}','TopicController@update');

Route::get('/topic/{topic}/threads','ThreadController@index');
Route::get('/topic/{topic}/threads/create','ThreadController@create');
Route::post('/topic/{topic}/threads','ThreadController@store');

