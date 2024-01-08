<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/user', [UserController::class, 'index']);
Route::resource('/mahasiswa', 'App\Http\Controllers\MahasiswaController');
Route::resource('/dosen', 'App\Http\Controllers\DosenController');
Route::resource('/matakuliah', 'App\Http\Controllers\MatakuliahController');
Route::resource('/prodi', 'App\Http\Controllers\ProdiController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
