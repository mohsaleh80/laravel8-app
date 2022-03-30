<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

*/
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');

//Route::resource('post', 'App\Http\Controllers\PostController');
Route::get('/post', 'App\Http\Controllers\PostController@index');
Route::get('/post/{id}', 'App\Http\Controllers\PostController@show');
Route::get('/post/edit/{id}', 'App\Http\Controllers\PostController@edit');
