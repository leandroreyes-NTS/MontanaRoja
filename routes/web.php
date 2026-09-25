<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/sobre-nosotros', [PageController::class, 'sobreNosotros'])->name('sobre.nosotros');
Route::get('/camping', [PageController::class, 'camping'])->name('camping');
Route::get('/restaurante-bar', [PageController::class, 'restaurante'])->name('restaurante');
Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');
Route::get('/ubicacion', [PageController::class, 'ubicacion'])->name('ubicacion');
