<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Placeholder routes for the navigation menu items
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/rewards', function () {
    return view('rewards');
})->name('rewards');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/logout', function () {
    // Add logout logic here
    return redirect()->route('home');
})->name('logout');
