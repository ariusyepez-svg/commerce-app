<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos"; // En referencia a la tabla productos
    protected $primaryKey = "producto_id"; // En referencia a la clave primaria personalizada
    public $timestamps = false; // Indica que no busque created_at y updated_at

    // Registro por asignación (IMPLÍCITO)
    // Al dejar el array vacío, le permites a Laravel recibir todos los campos del formulario de golpe
    protected $guarded = []; 
}
