<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('1')->group(function () {
    Route::get('/aktivasi', [RamuController::class, 'aktivasi']);
    Route::get('/baru', [RamuController::class, 'baru']);
    Route::get('/ulang', [RamuController::class, 'ulang']);
    Route::get('/peserta', [RamuController::class, 'peserta']);
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/angkatan', [AdminController::class, 'angkatan']);
        Route::get('/msj1', [AdminController::class, 'ramu']);
        Route::get('/msj2', [AdminController::class, 'rakit']);
        Route::get('/msj3', [AdminController::class, 'terap']);
        
        Route::post('/msj1/update', [AdminController::class, 'ramuUpdate']);
        Route::post('/msj2/update', [AdminController::class, 'rakitUpdate']);
        Route::post('/msj3/update', [AdminController::class, 'terapUpdate']);
    });
});

Route::get('/logout', [LoginController::class, 'logOut']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);