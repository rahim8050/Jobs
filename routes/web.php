<?php

use App\Http\Controllers\Jobs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');

Route::get('/login', [Jobs::class, 'login'])->name('login');
Route::get('/table', [Jobs::class, 'table'])->name('table');
Route::get('/register',[Jobs::class, 'register'])->name('register');
Route::get('/update',[Jobs::class, 'update'])->name('update');
