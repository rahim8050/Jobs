<?php

use App\Http\Controllers\Jobs;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');

Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::get('/works/{work}',[])
Route::get('/table', [Jobs::class, 'table'])->name('table');
Route::get('/register',[UserController::class, 'register'])->name('register');
Route::get('/update',[Jobs::class, 'update'])->name('update');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
// add new user
Route::post('/users', [UserController::class, 'store']);
