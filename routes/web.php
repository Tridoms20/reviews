<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard',[DashboardController::class, 'index']);

Route::view('/','auth.login');
Route::view('/register','auth.register');

## Admin Routes
Route::view('/admin','admin.dashboard');
Route::view('/admin/penilaian','admin.penilaian');
Route::view('/admin/laporan','admin.laporan');
Route::view('/admin/jadwal','admin.jadwal');
Route::view('/admin/mahasiswa','admin.mahasiswa');
Route::view('/admin/tutor','admin.tutor');

## Tutor Routes
Route::view('/tutor','tutor.dashboard');
Route::view('/tutor/penilaian','tutor.penilaian');
Route::view('/tutor/jadwal','tutor.jadwal');

## Mahasiswa Routes
Route::view('/mahasiswa','mahasiswa.dashboard');
Route::view('/mahasiswa/penilaian','mahasiswa.penilaian');
Route::view('/tutor/jadwal','mahasiswa.jadwal');

