<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;

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
    return redirect('/movies');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\MovieController::class, 'index'])->name('home');

Route::resource('movies', MovieController::class);
Route::resource('casts', CastController::class);
Route::resource('movies.comments', CommentController::class)->shallow();

Route::post('/movies/{movie.id}/cast_store', [MovieController::class, 'movie_cast_store'])->name('movie_cast_store');
Route::delete('/movies/{movie.id}/casts/{cast:id}', [MovieController::class, 'movie_cast_destroy'])->name('movie_cast_destroy');
