<?php

use App\Http\Controllers\AutorController;
use App\Models\Autor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores', [AutorController::class, 'store'])->name('autores.store');
Route::get('/autores/{codigo_autor}/edit', [AutorController::class, 'edit'])->name('autores.edit');
Route::put('/autores/{codigo_autor}', [AutorController::class, 'update'])->name('autores.update');
Route::delete('/autores/{codigo_autor}', [AutorController::class, 'destroy'])->name('autores.destroy');