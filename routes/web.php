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

require __DIR__.'/auth.php';
