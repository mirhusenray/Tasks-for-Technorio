<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FavoriteController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('movies',MovieController::class)->middleware('is_admin');
Route::get('search',[MovieController::class,'search']);
Route::post('search',[MovieController::class,'search'])->name('movie.search');

// favorite_movie_search

Route::resource('favorites',FavoriteController::class);
Route::get('sign-out', [HomeController::class, 'perform']);

Route::post('ajaxRequest',[HomeController::class,'ajaxRequest'])->name('ajaxRequest');
