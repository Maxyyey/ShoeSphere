<?php

use Illuminate\Support\Facades\Route;

// Route to the index view
Route::get('/', function () {
    return view('index');
})->name('index');

// Route to the shop view
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

