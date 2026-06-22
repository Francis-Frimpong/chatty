<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\AuthController;

Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
