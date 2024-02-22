<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/{anggota}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/{anggota}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/{anggota}', [AnggotaController::class, 'delete'])->name('anggota.delete');

