<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\StudentController;

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
    return view('index');
});
Route::get('/home', [StudentController::class, 'dashboard'])->name('dashboard');

Route::prefix('mahasiswa') -> group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [StudentController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [StudentController::class, 'store'])->name('mahasiswa.store');
    Route::get('/{user}', [StudentController::class, 'show'])->name('poin.create');
    Route::delete('/{user}', [StudentController::class, 'destroy'])->name('mahasiswa.destroy');
});

Route::prefix('event') -> group(function(){
    Route::get('/', [EventController::class, 'index'])->name('event.index');
    Route::get('/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');
    Route::delete('/{event}', [EventController::class, 'destroy'])->name('event.destroy');
});

Route::prefix('poin') -> group(function(){
    Route::get('/', [PoinController::class, 'index'])->name('poin.index');
    Route::get('/create', [PoinController::class, 'create'])->name('poin.create');
    Route::post('/store', [PoinController::class, 'store'])->name('poin.store');
});