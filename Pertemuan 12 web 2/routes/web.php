<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use App\Models\paramedik;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Aqsha Yudha Yusro siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/kelurahan', function () {
    return view('kelurahan');
});

Route::get('/unit_kerja', function () {
    return view('unit_kerja');
});

Route::get('/paramedik', function () {
    return view('paramedik');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien/index', [PasienController::class, 'index']);

Route::get('/kelurahan/index', [KelurahanController::class, 'index']);

Route::get('/unit_kerja/index', [UnitKerjaController::class, 'index']);

Route::get('/paramedik/index', [ParamedikController::class, 'index']);

Route::get('/periksa/index', [PeriksaController::class, 'index']);