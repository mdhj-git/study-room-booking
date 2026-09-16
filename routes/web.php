<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});
Route::get('/register',[AuthController::class,'showRegisterForm'])->middleware('guest')->name('register');
Route::post('/register',[AuthController::class,'register'])->middleware('guest');
Route::get('/login',[AuthController::class,'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
