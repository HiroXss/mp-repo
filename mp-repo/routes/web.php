<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnlacePublicoController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




// Route::middleware(['auth'])->group(function () {
    Route::get('/enlace-publico', [EnlacePublicoController::class, 'index'])->name('enlace-publico');
    Route::post('/enlace-publico/generar', [EnlacePublicoController::class, 'generar'])->name('enlace.generar');
// });

// Ruta PÚBLICA para subir proyectos. 
// El middleware 'signed' es el que valida que el enlace no haya expirado ni sido alterado.
Route::get('/proyectos/nuevo-publico', [EnlacePublicoController::class, 'create'])
    ->name('proyectos.public.create')
    ->middleware('signed');