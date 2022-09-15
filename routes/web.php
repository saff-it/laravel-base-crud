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

// Route::get('/comics', "ComicController@index")->name('comic.index');
// Route::get('/comics/create', "ComicController@create")->name('comic.create');
// Route::get('/comics/{comic}', "ComicController@show")->name('comic.show');

Route::resource('comics', "ComicController");

