<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaguController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/lagu', [LaguController::class, 'index']);
    Route::post('/lagu', [LaguController::class, 'store']);
    Route::put('/lagu/{lagu}', [LaguController::class, 'update']);
});

