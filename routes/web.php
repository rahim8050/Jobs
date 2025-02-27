<?php

use App\Http\Controllers\Jobs;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Models\Work;
use Database\Factories\WorkFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');
//  Route::get('/jobs',function(){
    
// return view('users.jobs', [
//     'jobs' => Work::all()
     
    
// ]);
   
//  })->name('jobs');  
Route::get('/jobs', [WorkController::class, 'index'])->name('jobs');
// Route::get('/jobs/create', [WorkController::class, 'create'])->name('create');
// Route::post('/jobs', [WorkController::class, 'store']);
//  single job
 Route::get('/jobs/{job}',function(Work $job){
    return view('users.job', [
        'job' => $job
    ]);
 })->name('show');
// Route::get('/jobs',[WorkController::class,'jobs'])->name('jobs');
Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::get('/works/{work}',[])
Route::get('/table', [WorkController::class, 'table'])->name('table');
Route::get('/register',[UserController::class, 'register'])->name('register');
// Route::get('/update',[WorkFactory::class, 'update'])->name('update');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
// add new user
Route::post('/users', [UserController::class, 'store']);
