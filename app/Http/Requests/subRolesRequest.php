<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subRolesRequest extends FormRequest
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
            'rol_seleccionado'=>'required','unique',
            'nombre_sub_rol'=>'required',
            'desc_sub_rol'=>'required',

        ];
    }
    public function messages()
    {
        return[
            'desc_sub_rol.required'=>'El campo descripcion rol es requerido',
        ];
    }
}
