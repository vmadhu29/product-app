<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

// Landing page for guests, redirect to products for authenticated users - added by madhu
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('products.index');
    }
    return view('landing');
});

// Product resource routes with auth middleware - added by madhu
Route::resource('products', ProductController::class)->middleware('auth');

// Add routes for register and login forms
Route::get('/register', function () {
    if (Auth::check()) {
        return redirect()->route('products.index');
    }
    return view('register');
})->middleware('guest')->name('register.form');

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('products.index');
    }
    return view('login');
})->middleware('guest')->name('login.form');

require __DIR__.'/auth.php';
