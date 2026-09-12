<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});
Route::get('/register',[AuthController::class,'showRegisterForm'])->middleware('guest');
Route::post('/register',[AuthController::class,'register'])->middleware('guest');
Route::get('/login',[AuthController::class,'showLoginForm'])->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
