<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\userController;

Route::get('/', [StaticController::class, 'home'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');

Route::resource('users', userController::class);
