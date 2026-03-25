<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Landing page (usuarios NO logueados)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('landingpage');
});

// Dashboard (solo usuarios logueados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Ruta por defecto después de login (opcional)
Route::get('/home', function () {
    return redirect('/dashboard');
})->name('home');