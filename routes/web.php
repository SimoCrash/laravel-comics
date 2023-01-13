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
    return view('guest.comics', [
        'menu' => config('menu'),
    ]);
});

Route::get('/comics', function () {
    return view('guest.comics', [
        'menu' => config('menu'),
    ]);
})->name('comics');

Route::get('/characters', function () {
    return view('guest.characters', [
        'menu' => config('menu'),
    ]);
})->name('characters');

Route::get('/movies', function () {
    return view('guest.movies', [
        'menu' => config('menu'),
    ]);
})->name('movies');

Route::get('/tv', function () {
    return view('guest.tv', [
        'menu' => config('menu'),
    ]);
})->name('tv');

Route::get('/games', function () {
    return view('guest.games', [
        'menu' => config('menu'),
    ]);
})->name('games');

Route::get('/collectibles', function () {
    return view('guest.collectibles', [
        'menu' => config('menu'),
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    return view('guest.videos', [
        'menu' => config('menu'),
    ]);
})->name('videos');

Route::get('/fans', function () {
    return view('guest.fans', [
        'menu' => config('menu'),
    ]);
})->name('fans');

Route::get('/news', function () {
    return view('guest.news', [
        'menu' => config('menu'),
    ]);
})->name('news');

Route::get('/shop', function () {
    return view('guest.shop', [
        'menu' => config('menu'),
    ]);
})->name('shop');
