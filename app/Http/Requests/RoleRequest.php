<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RoleRequest extends FormRequest
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
     * @param App\Http\Request\RoleRequest
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages():array
    {
        return [
            'name.required'=>__('Ingrese Rol'),
            'name.string'=>__('Ingrese un cadena de texto'),
            'name.max'=>__('Ingrese como maximo 50 caracteres'),
            'name.unique'=>__('El rol ya existe'),
            'guard_name.required'=>__('Ingrese Guard Name'),
            'guard_name.string'=>__('Ingrese un cadena de texto'),
            'guard_name.max'=>__('Ingrese como maximo 50 caracteres'),
        ];
    }
    public function rules(): array
    {
        return [
            'name'=>['required','string','max:50',Rule::unique(table: 'roles',column:'name')],
            'guard_name'=>['required','string','max:50'],
        ];
    }
   
}
