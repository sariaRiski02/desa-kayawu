<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\notAuthMiddleware;

Route::get('/', function () {
    $post = Post::latest()->take(3)->get();
    return view('home', compact('post'));
})->name('home');

Route::view('/tentang', 'about')->name('about');
Route::view('/pemerintahan', 'gov')->name('gov');
Route::view('/kontak', 'contact')->name('contact');
Route::view('/demografi', 'demografi')->name('demo');
Route::view('/potensi', 'potention')->name('potention');
Route::get('/berita', [NewsController::class, 'index'])->name('news');

Route::get('/berita/search', [NewsController::class, 'search'])->name('news.search');
Route::get('/berita/kategori/{category}', [NewsController::class, 'category'])->name('news.category');


Route::middleware([notAuthMiddleware::class])->group(function () {
    Route::get('/register', function () {
        return view('register');
    });
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::view('/login', 'login')->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->middleware([AuthMiddleware::class])->name('logout');


Route::prefix('dashboard')
    ->middleware([AuthMiddleware::class])
    ->group(function () {
        Route::prefix('berita')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('berita');
            Route::get('/add', [DashboardController::class, 'addIndex'])->name('berita.add');
            Route::post('/add', [DashboardController::class, 'add'])->name('berita.add');
            Route::get('/update/{slug}', [DashboardController::class, 'updateIndex'])->name('berita.update');
            Route::put('/update/{slug}', [DashboardController::class, 'update'])->name('berita.update');
            Route::get('/delete/{slug}', [DashboardController::class, 'delete'])->name('berita.delete');
            Route::get('/{slug}', [DashboardController::class, 'single'])->name('single.post');
        })->name('dashboard.berita');
    });
