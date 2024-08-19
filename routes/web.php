<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('dashboard', ['title' => 'OAS+ | Rotator Management']);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'OAS+ | Admin Profile']);
});