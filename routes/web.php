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
    return view('welcome');
});


Route::resource('books', App\Http\Controllers\BookController::class);


Route::resource('members', App\Http\Controllers\MemberController::class);


Route::resource('genres', App\Http\Controllers\GenreController::class);


Route::resource('loans', App\Http\Controllers\LoanController::class);
