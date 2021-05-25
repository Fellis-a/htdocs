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
    return view('home');
})->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});


Route::view('home', 'home')->middleware('auth');
Route::post('/authorization', [AuthorizationController::class, 'submitAuth'])->name('authorization');
