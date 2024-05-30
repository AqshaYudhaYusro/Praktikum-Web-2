<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
