<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('dahsboard', [
        'title' => 'Dashboard',
    ]);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa',[
        'title' => 'Tambah Mahasiswa',
    ]);
});

Route::get('/poin', function () {
    return view('poin',[
        'title' => 'Tambah Poin',
    ]);
});

// Route::get('/data', function () {
//     return view('mahasiswaktif',[
//         'title' => 'Data Mahasiswa',
//     ]);
// });

Route::get('/kegiatan', function () {
    return view('kegiatan',[
        'title' => 'Kegiatan',
    ]);
});

Route::get('/kegiatanmahasiswa', function () {
    return view('kegiatanaktif',[
        'title' => 'Poin Mahasiswa',
    ]);
});

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/data', [UserController::class, 'index']);
Route::get('/data/delete/{id}', [UserController::class, 'delete']);
Route::get('/data/update/{id}', [UserController::class, 'update']);

Route::resource('/data', UserController::class);