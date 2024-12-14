<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
// Route::get('/', function () {
//    return view('1.file');
// });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class,'index']);

Route::get('/profile', function () {
    $fullName = 'ahmad taupik';
    return view('profile', [
        'nama' => $fullName
    ]);
});