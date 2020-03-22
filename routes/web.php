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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/post', function () {
//     $nama = "wahyukusuma";
//     return view('post', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/post', 'PagesController@post');

Route::get('/user', 'UserController@index');

//Person/User

Route::get('/person', 'PersonController@index');
Route::get('/person/create', 'PersonController@create');
Route::get('/person/{person}', 'PersonController@show');
Route::post('/person', 'PersonController@store');
Route::delete('/person/{person}', 'PersonController@destroy');
Route::get('/person/{person}/edit', 'PersonController@edit');
Route::patch('/person/{person}', 'PersonController@update');
