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
    return view('coming_soon');
})->name('home');

Route::get('/characters', function () {
    return view('coming_soon');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/comic_detail/{slug}', function ($slug) {
    $comics = array_filter(config('comics'), fn($comic) => $comic['slug'] === $slug);
    $comic = $comics[array_key_first($comics)];
    if (empty($comic)) {
        header(route('comics'));
    }

    return view('comic_detail', compact('comic'));
})->name('comic_detail');

Route::get('/movies', function () {
    return view('coming_soon');
})->name('movies');

Route::get('/tv', function () {
    return view('coming_soon');
})->name('tv');

Route::get('/games', function () {
    return view('coming_soon');
})->name('games');

Route::get('/collectibles', function () {
    return view('coming_soon');
})->name('collectibles');

Route::get('/videos', function () {
    return view('coming_soon');
})->name('videos');

Route::get('/fans', function () {
    return view('coming_soon');
})->name('fans');

Route::get('/news', function () {
    return view('coming_soon');
})->name('news');

Route::get('/shop', function () {
    return view('coming_soon');
})->name('shop');
