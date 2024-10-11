<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aulacontroller;


Route::view('/', 'welcome');
Route::get('/aulas', [Aulacontroller::class,'index']);

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


