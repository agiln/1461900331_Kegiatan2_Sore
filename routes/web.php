<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::get('/home', [JadwalController::class, 'index']);

Route::get('/artikel', function () {
    return view('artikel0331');
});
Route::get('/contact', function () {
    return view('contact0331');
});