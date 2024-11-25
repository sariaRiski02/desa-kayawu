<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'about')->name('about');
Route::view('/pemerintahan', 'gov')->name('gov');
Route::view('/demografi', 'demografi')->name('demo');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::view('/login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::prefix('dashboard')->group(function () {
    Route::get('/berita', [DashboardController::class, 'index'])->name('berita');
    Route::get('/berita/add', [DashboardController::class, 'addIndex'])->name('berita.add');
    Route::post('/berita/add', [DashboardController::class, 'add'])->name('berita.add');
    Route::get('/berita/update/{slug}', [DashboardController::class, 'updateIndex'])->name('berita.update');
    Route::get('/berita/delete{slug}', [DashboardController::class, 'delete'])->name('berita.delete');
    Route::get('/berita/{slug}', [DashboardController::class, 'single'])->name('single.post');
});
