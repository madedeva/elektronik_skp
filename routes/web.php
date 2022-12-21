<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PoinController;

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


Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');

Route::prefix('mahasiswa') -> group(function(){
    Route::get('/', [UserController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [UserController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [UserController::class, 'store'])->name('mahasiswa.store');
});

Route::prefix('event') -> group(function(){
    Route::get('/', [EventController::class, 'index'])->name('event.index');
    Route::get('/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');
});

Route::prefix('poin') -> group(function(){
    Route::get('/', [PoinController::class, 'index'])->name('poin.index');
    Route::get('/create', [PoinController::class, 'create'])->name('poin.create');
    Route::post('/store', [PoinController::class, 'store'])->name('poin.store');
});