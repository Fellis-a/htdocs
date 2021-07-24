<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VkrController;
use App\Http\Controllers\AddVkrController;

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

Route::get('/', [VkrController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vkr/{id_vkr}', [VkrController::class, 'showOneVkr'])->name('vkr-one');
Route::get('/home/vkr/add', [AddVkrController::class, 'create'])->name('vkr-create');
Route::post('/vkr/add/submit', [AddVkrController::class, 'addVkr'])->name('vkr-addForm');
