<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('aulas', 'aulas')
    ->middleware(['auth'])
    ->name('aulas');

Route::view('profesores', 'profesores')
    ->middleware(['auth'])
    ->name('profesores');

Route::view('horarios', 'horarios')
    ->middleware(['auth'])
    ->name('horarios');

require __DIR__.'/auth.php';
