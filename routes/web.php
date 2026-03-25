<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use Illuminate\Support\Facades\Auth;

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