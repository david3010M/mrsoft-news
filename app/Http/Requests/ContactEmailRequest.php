<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactEmailRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ruc' => 'required|string|min:11|max:11',
            'razon_social' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'ciudad_pais' => 'nullable|string|max:255',
            'persona_contacto' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string|min:50|max:1000',
            'producto' => 'required|string|max:255',
        ];
    }
}
