<?php

use Illuminate\Http\Request;
use App\Http\Controllers\nomors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


Auth::routes();
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register-user');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth');

// Route::get('/forget', function () {
//     return view('forget', ['title' => 'OAS+ | Rotator Management']);
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [nomors::class, 'index'])->name('nomors.index');

    Route::get('/admin/create', [nomors::class, 'create'])->name('nomors.create');
    Route::post('/admin', [nomors::class, 'store'])->name('nomors.store');
    Route::put('/admin/multi-update', [nomors::class, 'multiUpdate'])->name('nomors.multiUpdate');
    Route::delete('/admin/multi-delete', [nomors::class, 'multiDelete'])->name('nomors.multiDelete');
    Route::get('/admin/search', [nomors::class, 'search'])->name('search');
    Route::get('/nomors/search', [nomors::class, 'search'])->name('nomors.search'); //harusnya berdasarkan ID user

    Route::get('/wa-rotator', [nomors::class, 'generateLink'])->name('nomors.generateLink');
    Route::get('/admin/show-link', [nomors::class, 'showlink'])->name('nomors.showLink');


    Route::get('/profile', function () {
        return view('profile', ['title' => 'OAS+ | Admin Profile']);
    });
});
