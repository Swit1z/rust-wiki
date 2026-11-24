<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // или 'home', в зависимости от имени файла
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

Route::get('/login', function () {
    return view('log');
})->name('login');

Route::get('/register', function () {
    return view('reg');
})->name('register');