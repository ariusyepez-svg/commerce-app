<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
{
    // Cambiar a true para permitir que se ejecute la validación
    public function authorize(): bool
    {
        return true;
    }

    // 1. Reglas de validación obligatorias (Pág. 7)
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'marca' => 'required',
            'precio' => 'required|numeric',
            'fvencimiento' => 'required|date',
            'stock' => 'required|integer',
        ];
    }

    // 2. Personalizar nombres de los atributos (Pág. 8)
    public function attributes(): array
    {
        return [
            'nombre' => 'NOMBRE',
            'marca' => 'MARCA',
            'precio' => 'PRECIO',
            'fvencimiento' => 'FECHA DE VENCIMIENTO',
            'stock' => 'STOCK',
        ];
    }

    // 3. Personalizar mensajes específicos (Pág. 9)
    public function messages(): array
    {
        return [
            'nombre.required' => 'Error ingresar NOMBRE.',
            'marca.required' => 'Error ingresar MARCA.',
            'precio.required' => 'Error ingresar PRECIO.',
            'fvencimiento.required' => 'Error ingresar FECHA DE VENCIMIENTO.',
            'stock.required' => 'Error ingresar STOCK.',
        ];
    }
}
