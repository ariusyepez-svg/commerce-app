<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

// Listar
Route::get('/productos', [ProductoController::class, 'index_GET'])->name('productos.index');

// Crear
Route::get('/productos/create', [ProductoController::class, 'create_GET']);
Route::post('/productos', [ProductoController::class, 'store_POST'])->name('productos.store');

// Editar (Formato exacto de la guía usando Route Model Binding)
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit_GET'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update_PUT'])->name('productos.update');

//Eliminar
Route::get('/productos/{producto}/delete', [ProductoController::class, 'delete_GET'])->name('productos.delete');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy_DELETE'])->name('productos.destroy');


