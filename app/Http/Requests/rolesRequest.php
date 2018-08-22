<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rolesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //crear y editar
            'nombre_rol'=>'required|max:50, uniqued',
            'desc_rol'=>'required|max:100',

        ];
    }
     public function messages()
    {
        return[
            'desc_rol.required'=>'El campo descripcion rol es requerido',
            'nombre_rol.uniqued'=>'El nombre rol ya existe'
        ];
    }
}
