<?php

use App\Http\Controllers\JadwalKuliahController;

Route::get('/jadwal', [JadwalKuliahController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalKuliahController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal', [JadwalKuliahController::class, 'store'])->name('jadwal.store');

Route::get('/', function () {
    return view('welcome');
});
