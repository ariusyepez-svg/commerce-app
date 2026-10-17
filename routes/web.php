<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//listar
Route::get('/productos',[ProductoController::class,'index_GET']);

//registrar
Route::get('/productos/create',[ProductoController::class,'create_GET']);
Route::post('/productos',[ProductoController::class,'store_POST'])->name('productos.store');

//Editar
Route::get('/productos/{producto_id}/edit',[ProductoController::class,'edit_GET'])->name('productos.edit');
Route::put('/productos/{producto_id}',[ProductoController::class,'update_PUT'])->name('productos.update');