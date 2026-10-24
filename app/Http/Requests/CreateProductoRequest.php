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
            'marca' => 'BRAND',
            'precio' => 'PRICE',
            'fvencimiento' => 'DATE OF EXPIRATION',
            'stock' => 'STOCK',
        ];
    }

       // 3. Personalizar mensajes específicos (Pág. 9 de la separata)
    public function messages(): array
    {
        return [
            'nombre.required' => 'Error, debe ingresar NAME.',
            'marca.required' => 'Error, debe ingresar BRAND.',
            'precio.required' => 'Error, debe ingresar PRICE.',
            'fvencimiento.required' => 'Error, debe ingresar DATE OF EXPIRATION.',
            'stock.required' => 'Error, debe ingresar STOCK.',
        ];
    }
}