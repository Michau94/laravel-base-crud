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


Route::get('/', 'ComicController@index')->name('home');

// grouping routes

Route::resource('comics', 'ComicController');



// // ROUTE DINAMICA
// Route::get('/comics/{id}', 'ComicController@show')->name('comic');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
