<?php

use App\Http\Controllers\nomors;
use App\Models\Nomor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [nomors::class, 'index'])->name('nomors.index');

Route::get('/admin/create', [nomors::class, 'create'])->name('nomors.create');
Route::post('/admin', [nomors::class, 'store'])->name('nomors.store');
Route::put('/nomors/multi-update', [nomors::class, 'multiUpdate'])->name('nomors.multiUpdate');
Route::delete('/nomors/multi-delete', [nomors::class, 'multiDelete'])->name('nomors.multiDelete');
Route::get('/search', [nomors::class, 'search'])->name('search');
Route::get('/nomors/search', [nomors::class, 'search'])->name('nomors.search');

// Route::get('/admin/{nomor}/edit', [nomors::class, 'edit'])->name('nomors.edit');
// Route::put('/admin/{nomor}', [nomors::class, 'update'])->name('nomors.update');
// Route::delete('/admin/{nomor}', [nomors::class, 'destroy'])->name('nomors.destroy');


Route::get('/profile', function () {
    return view('profile', ['title' => 'OAS+ | Admin Profile']);
});