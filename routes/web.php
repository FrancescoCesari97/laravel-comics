<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/characters', function () {
  return view('pages.characters');
})->name('characters');

Route::get('/comics', [PageController::class, 'comics'] )->name('comics');

Route::get('/comic-detail', [PageController::class, 'ComicDetail'] )->name('comic');


Route::get('/movies', function () {
  return view('pages.movies');
})->name('movies');

Route::get('/tv', function () {
  return view('pages.tv');
})->name('tv');

Route::get('/collectibles', function () {
  return view('pages.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
  return view('pages.videos');
})->name('videos');