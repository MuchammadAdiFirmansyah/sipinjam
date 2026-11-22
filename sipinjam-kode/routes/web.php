<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;

Route::get('/', function () {
    return view('welcome');
});

// Route latihan dasar
Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

Route::get('/halo/{nama}', function ($nama) {
    return 'Halo, ' . $nama . '!';
});

Route::get('/coba', function () {
    return view('coba');
});

// Tujuh route CRUD untuk data alat
Route::resource('alat', AlatController::class);
