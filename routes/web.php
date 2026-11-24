<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/biom', function () {
    return view('biom');
})->name('biom');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/npc', function () {
    return view('npc');
})->name('npc');