<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

// Carga directamente el listado en la raíz "/"
Route::get('/', [EmpleadosController::class, 'index']);

// Mantiene el resto de rutas (create, store, edit, update, destroy)
Route::resource('empleados', EmpleadosController::class);