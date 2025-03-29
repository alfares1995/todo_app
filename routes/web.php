<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
Route::resource('todos', TodoController::class)->middleware(['auth', 'verified']);
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
