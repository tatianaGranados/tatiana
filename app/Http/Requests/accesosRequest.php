<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class accesosRequest extends FormRequest
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

    public function rules()
    {
        return [
            'subRol'=>'required',
            'funcion'=>'required',
            'unidad'=>'required',
            'sis'=>'numeric',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required|after:fecha_inicio',
        ];
    }

    public function messages()
    {
        return[
            'subRol.required'=>'El campo descripcion ROL/SOB-ROL es requerido',
            'sis.numeric'=>'El campo COD SIS tiene que ser un numero',
        ];
    }
}
