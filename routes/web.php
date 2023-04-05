<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RakitController;

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
    Route::get('/aktivasi', [RakitController::class, 'aktivasi']);
    Route::get('/baru', [RakitController::class, 'baru']);
    Route::get('/ulang', [RakitController::class, 'ulang']);
    Route::get('/peserta', [RakitController::class, 'peserta']);
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/signin', [AuthController::class, 'signin']);
});