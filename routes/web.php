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

    $cards = config('db.cards');

    return view('home',compact('cards'));
})->name('home');

Route::get('/comics', function () {

    $cards = config('db.cards');

    return view('comics',compact('cards'));
})->name('comics');

Route::get('/characters', function () {

    $cards = config('db.cards');

    return view('characters',compact('cards'));
})->name('characters');

Route::get('/movies', function () {
    $cards = config('db.cards');

    return view('movies',compact('cards'));
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {

    $cards = config('db.cards');

    return view('shop',compact('cards'));
})->name('shop');


Route::get('/single/{id}',function($id) {
    $single = config('db.cards'); // prendiamo tutti i record
    $single_filtered = array_filter($single, fn($item) => $item['id'] == $id); // filtriamo i record per id passato nell url
    $first_key = array_key_first($single_filtered); // prendiamo la prima chiave dell'array filtrato
    $single_filtered = $single[$first_key];

    return view('single', compact('single_filtered'));
})->name('single');
