<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Pastikan kodenya seperti ini agar yang dipanggil adalah fungsi dari Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/profile', [HomeController::class, 'profile']);