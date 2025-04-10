<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Ruta principal (puede ser bienvenida o menú principal si lo prefieres)
Route::get('/', function () {
    return view('welcome');
});

// Ruta CRUD para productos
Route::resource('productos', ProductoController::class);
