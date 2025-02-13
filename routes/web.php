<?php

use App\Http\Controllers\Jobs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [Jobs::class, 'login'])->name('login');
Route::get('/table', [Jobs::class, 'table'])->name('table');
