<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagination;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VkrController;

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

Route::get('/', [VkrController::class, 'index']
  //return view('index',[VkrController::class, 'index']);
  //$vkrs = DB::table('vkrs')->get();

)->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/search', function () {
    return view('home.search');
})->name('search');

Route::get('/teacher', function () {
    return view('user.teacherView');
})->name('teacher');

//Route::get('/', [Pagination::class, 'vkr']);

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('layouts.app');
});


//Route::view('home.home', 'home')->middleware('auth');
Route::post('/authorization', [AuthorizationController::class, 'submitAuth'])->name('authorization');

//-----------------------new
Route::get('/vkr/{id_vkr}', [VkrController::class, 'showOneVkr'])->name('vkr-one');
Route::get('/vkr/add', [AddVkrController::class, 'create'])->name('vkr-create');
Route::post('/vkr/add/submit', [AddVkrController::class, 'addVkr'])->name('vkr-addForm');
//Route::resource('vkrs', VkrController::class);
//Route::get('/vkrs/', [VkrController::class, 'index']);

/*Route::group(['prefix' => 'teacher'], function() {
    Route::view('/', 'user.teacherView');
    Route::get('vkr/create/{id}', [VkrController::class, 'create']);
    Route::resource('vkrs', 'VkrController')->except('create');
});*/
