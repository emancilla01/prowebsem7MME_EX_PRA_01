<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/prueba', function () {
    return view('inicio');
});

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return view("inicio_autenticado"); //Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
