<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard',[DashboardController::class, 'index']);

Route::view('/','auth.login');

## Admin Routes
Route::view('/admin','admin.dashboard');
Route::view('/admin/penilaian','admin.penilaian');
Route::view('/admin/laporan','admin.laporan');
Route::view('/admin/jadwal','admin.jadwal');
Route::view('/admin/mahasiswa','admin.mahasiswa');
Route::view('/admin/tutor','admin.tutor');

## Tutor Routes
Route::view('/mahasiswa','mahasiswa.dashboard');
Route::view('/tutor','tutor.dashboard');

## Mahasiswa Routes
