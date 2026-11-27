<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Основные страницы
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mech', function () {
    return view('mech');
})->name('mech');

Route::get('/building', function () {
    return view('building');
})->name('building');

Route::get('/news', function () {
    return view('news');
})->name('news');

// Маршруты аутентификации
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Выход (только для авторизованных)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Админка (только для админов)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});