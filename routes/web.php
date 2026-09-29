<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard/guru', function () {
    return view('dashboard.guru');
});

Route::post('/logout', [AuthController::class, 'logout']);