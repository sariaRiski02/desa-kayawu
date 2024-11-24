<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'about')->name('about');
Route::view('/pemerintahan', 'gov')->name('gov');
Route::view('/demografi', 'demografi')->name('demo');
Route::view('/berita', 'news')->name('news');
Route::view('/login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index']);
