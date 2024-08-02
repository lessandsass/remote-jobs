<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::get('/register', [RegisteredUserController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('jobs.login');
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy']);


