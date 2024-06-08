<?php

use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\jobController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


// this one here is the job controller
Route::get('/job', [jobController::class, 'index']);
Route::get('/job/create', [jobController::class, 'create' ]);
Route::post('/job', [jobController::class, 'store']);
Route::get('/job/{job}', [jobController::class, 'show']);
Route::delete('/job/{job}', [jobController::class, 'destroy']);
Route::get('/job/{job}/edit', [jobController::class, 'edit']);
Route::patch('/job/{job}/edit', [jobController::class, 'update']);


    
// register controller
Route::get('/register', [registerController::class, 'create']);

// login controller
Route::patch('/login', [sessionController::class, 'store']);
Route::get('/login', [sessionController::class, 'create']);

// logout controller
Route::get('/logout', [sessionController::class, 'destroy']);

// register controller
Route::post('/register', [registerController::class, 'store']);


