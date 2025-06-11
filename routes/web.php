<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard',[DashboardController::class, 'index']);

Route::view('/', 'auth.login');
Route::view('/register', 'auth.register');

## Admin Routes
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/penilaian', 'admin.penilaian')->name('admin.penilaian');
Route::view('/admin/laporan', 'admin.laporan')->name('admin.laporan');
Route::view('/admin/jadwal', 'admin.jadwal')->name('admin.jadwal');
Route::view('/admin/mahasiswa', 'admin.mahasiswa')->name('admin.mahasiswa');
Route::view('/admin/tutor', 'admin.tutor')->name('admin.tutor');

## Tutor Routes
Route::view('/tutor', 'tutor.dashboard')->name('tutor.dashboard');
Route::view('/tutor/penilaian', 'tutor.penilaian')->name('tutor.penilaian');
Route::view('/tutor/bimbingan', 'tutor.bimbingan')->name('tutor.bimbingan');
Route::view('/tutor/jadwal', 'tutor.jadwal')->name('tutor.jadwal');

## Mahasiswa Routes
Route::view('/mahasiswa', 'mahasiswa.dashboard')->name('mahasiswa.dashboard');
Route::view('/mahasiswa/penilaian', 'mahasiswa.penilaian')->name('mahasiswa.penilaian');
Route::view('/mahasiswa/jadwal', 'mahasiswa.jadwal')->name('mahasiswa.jadwal');

