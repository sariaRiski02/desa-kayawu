<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\ResidentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'about')->name('about');
Route::view('/pemerintahan', 'gov')->name('gov');
Route::view('/kontak', 'contact')->name('contact');

Route::get('/demografi', [DemografiController::class, 'index'])->name('demo');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::view('/login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::view('/potensi', 'potention')->name('potention');


Route::prefix('dashboard')->group(function () {
    Route::prefix('berita')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('berita');
        Route::get('/add', [DashboardController::class, 'addIndex'])->name('berita.add');
        Route::post('/add', [DashboardController::class, 'add'])->name('berita.add');
        Route::get('/update/{slug}', [DashboardController::class, 'updateIndex'])->name('berita.update');
        Route::put('/update/{slug}', [DashboardController::class, 'update'])->name('berita.update');
        Route::get('/delete/{slug}', [DashboardController::class, 'delete'])->name('berita.delete');
        Route::get('/{slug}', [DashboardController::class, 'single'])->name('single.post');
    })->name('dashboard.berita');


    Route::get('/penduduk', [ResidentController::class, 'index'])->name('dashboard.resident');
    Route::post('/penduduk/add/kk', [ResidentController::class, 'addKK'])->name('dashboard.resident.addKK');

    Route::get('/penduduk/add', [ResidentController::class, 'indexAdd'])->name('dashboard.resident.add');
    Route::post('/penduduk/add', [ResidentController::class, 'addResident'])->name('dashboard.resident.addResident');

    Route::get('/penduduk/update/{nik}', [ResidentController::class, 'indexUpdate'])->name('dashborad.resident.update');
    Route::put('/penduduk/update/{nik}', [ResidentController::class, 'updateResident'])->name('dashboard.resident.update');
    Route::delete('/penduduk/delete/{nik}', [ResidentController::class, 'deleteResident'])->name('dashboard.resident.delete');
});
