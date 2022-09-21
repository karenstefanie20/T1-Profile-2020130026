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

// Route::get('/', [App\Http\Controllers\TugasController::class,'index'])->name('home');
// Route::get('portfolio', PortfolioController::class)->name('portfolio');

// Route::get('contoh-facade',
// [App\Http\Controllers\HomeController::class,'contohFacade'])->name('contohfacade');

// Route::get('contoh-class',
// [App\Http\Controllers\HomeController::class,'contohClass'])->name('contoh-class');

Route::get('/', 'HomeController@index')->name('home');
Route::get('contoh-facade', 'HomeController@contohFacade')->name('contoh-facade');
Route::get('contoh-class', 'HomeController@contohClass')->name('contoh-class');
//Single Action Route
Route::get('portfolio', 'PortfolioController')->name('portfolio')
