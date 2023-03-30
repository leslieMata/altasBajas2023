<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\Inicio;
use Illuminate\Support\Facades\Route;

Route::get('/', [Inicio::class, 'index'])->name('inicio');

Route::get('/altasBajas', [AltasBajas::class,'index'])->name('altasBajas');
Route::get('/create', [AltasBajas::class, 'create'])->name('create');
Route::post('/store', [AltasBajas::class, 'store'])->name('store');
Route::get('/edit/{id}', [AltasBajas::class, 'edit'])->name('edit');

Route::get('/show/{id}', [AltasBajas::class, 'show'])->name('show');

Route::delete('destroy/{id}', [AltasBajas::class, 'destroy'])->name('destroy');
