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

Route::get('/', "HomeController@index")->name('homepage');

Route::get('/comics', "ComicController@index")->name('comic.index');
Route::get('/comics/{comic}', "ComicController@show")->name('comic.show');

Route::get('/comics/{comic}', "ComicController@create")->name('comic.create');



Route::resource('/comic', "ComicController");

