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
    return view('homepage');
})->name('homepage');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/collectors', function () {
    return view('collectors');
})->name('collectors');

Route::get('/comics', function () {
    $comics = config('comicsdb');

    return view('comics', compact('comics'));
})->name('comics');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');