<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\RamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RakitController;
use App\Http\Controllers\TerapController;

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

Route::prefix('2')->group(function () {
    Route::get('/nij', [RakitController::class, 'nij']);
    Route::get('/peserta', [RakitController::class, 'peserta']);
    Route::get('/baru', [RakitController::class, 'baru']);
    Route::get('/ulang', [RakitController::class, 'ulang']);
});

Route::prefix('3')->group(function () {
    Route::get('/nij', [TerapController::class, 'nij']);
    Route::get('/peserta', [TerapController::class, 'peserta']);
    Route::get('/baru', [TerapController::class, 'baru']);
    Route::get('/ulang', [TerapController::class, 'ulang']);
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/angkatan', [AdminController::class, 'angkatan']);
        Route::get('/ulang', [AdminController::class, 'ulang']);
        Route::get('/msj1', [AdminController::class, 'ramu']);
        Route::get('/msj2', [AdminController::class, 'rakit']);
        Route::get('/msj3', [AdminController::class, 'terap']);

        Route::get('/cards', [CardController::class, 'index']);
        
        Route::post('/cards/update/{id}', [CardController::class, 'update']);
        Route::post('/angkatan/update/{id}', [AdminController::class, 'angkatanUpdate']);
        Route::post('/msj1/update/{id}', [AdminController::class, 'ramuUpdate']);
        Route::post('/msj2/update/{id}', [AdminController::class, 'rakitUpdate']);
        Route::post('/msj3/update/{id}', [AdminController::class, 'terapUpdate']);

        Route::prefix('link')->group(function() {
            Route::get('/', [LinkController::class, 'index']);
            Route::prefix('baru')->group(function () {
                Route::post('{id}', [LinkController::class, 'update']);
            });
        });
    });
});

Route::get('/logout', [LoginController::class, 'logOut']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);