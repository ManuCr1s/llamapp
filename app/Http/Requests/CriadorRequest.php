<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages():array
    {
        return [
            'id_criador.required'=>__('Ingrese Codigo de Criador'),
            'apellido_paterno.required'=>__('Ingrese Apellido Paterno'),
            'apellido_paterno.string'=>__('Ingrese cadena de texto'),
            'apellido_paterno.max'=>__('Ingrese menos de 50'),
            'apellido_materno.required'=>__('Ingrese Apellido Materno'),
            'apellido_materno.string'=>__('Ingrese cadena de texto'),
            'apellido_materno.max'=>__('Ingrese menos de 50'),
            'nombres.required'=>__('Ingrese Nombres'),
            'nombres.string'=>__('Ingrese cadena de texto'),
            'nombres.max'=>__('Ingrese menos de 50'),
            'telefono.required'=>__('Ingrese Telefono'),
            'telefono.string'=>__('Ingrese cadena de texto'),
            'telefono.max'=>__('Ingrese menos de 50'),
            'dni.required'=>__('Ingrese Dni'),
            'dni.string'=>__('Ingrese cadena de texto'),
            'dni.max'=>__('Ingrese menos de 50'),
            'nombre_ganaderia.required'=>__('Ingrese Nombre Ganaderia'),
            'nombre_ganaderia.string'=>__('Ingrese cadena de texto'),
            'nombre_ganaderia.max'=>__('Ingrese menos de 50'),
        ];
    }
    public function rules(): array
    {
        return [
            'id_criador'=>['required'],
            'apellido_paterno'=>['required','string','max:50'],
            'apellido_materno'=>['required','string','max:50'],
            'nombres'=>['required','string','max:50'],
            'telefono'=>['required','string','max:50'],
            'dni'=>['required','string','max:50'],
            'nombre_ganaderia'=>['required','string','max:50'],
            'estado'=>['required'],
            'id_region'=>['required'],
            'id_province'=>['required'],
            'id_distrito'=>['required'],
            'id_centro_poblado'=>['required'],
            'id_caserio_anexo'=>['required'],
        ];
    }
}
