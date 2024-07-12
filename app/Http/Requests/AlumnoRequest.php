<?php

// app/Http/Requests/AlumnoRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|regex:/^[\pL\s\-]+$/u',
            'curso' => 'required|string',
            'nota1' => 'required|numeric|between:0,20',
            'nota2' => 'required|numeric|between:0,20',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.regex' => 'El nombre no debe contener números.',
            'curso.required' => 'El curso es obligatorio.',
            'nota1.required' => 'La nota 1 es obligatoria.',
            'nota1.numeric' => 'La nota 1 debe ser un número.',
            'nota1.between' => 'La nota 1 debe estar entre 0 y 20.',
            'nota2.required' => 'La nota 2 es obligatoria.',
            'nota2.numeric' => 'La nota 2 debe ser un número.',
            'nota2.between' => 'La nota 2 debe estar entre 0 y 20.',
        ];
    }
}

