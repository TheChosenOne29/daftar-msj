<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
});

Route::prefix('1')->group(function () {
    Route::get('/aktivasi', [RamuController::class, 'aktivasi']);
    Route::get('/baru', [RamuController::class, 'baru']);
    Route::get('/ulang', [RamuController::class, 'ulang']);
    Route::get('/peserta', [RamuController::class, 'peserta']);
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
    });
});

Route::get('/logout', [LoginController::class, 'logOut']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);