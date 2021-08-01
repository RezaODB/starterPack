<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// AUTH
Route::view('/admin', 'admin.index')->middleware('auth');
Route::resource('/users', UserController::class)->except('show');
Route::view('/login', 'users.login')->middleware('guest');
Route::post('/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout')->middleware('auth');
Route::redirect('/register', 'users/create');