<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuariosRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'login'=>'required|max:20|min:5, uniqued',
            'clave'=>'required|min:5|max:30|alpha_dash',
            'apellidos'=>'required|string',
            'nombres'=>'required|string',
            'doc_identidad'=>'required|alpha_dash',
            'id_tipo_Doc_identidad'=>'required',
            'ciudad_expedido_doc'=>'required',
            'fecha_nac'=>'required',
            'pais_usuario'=>'required',
            'ciudad_usuario'=>'required',
            'id_provincia'=>'required',
            'sexo'=>'required',
            'id_estado_civil'=>'required',
            'id_tipo_email'=>'required',
            'email'=>'required',
            'id_tipo_telefono'=>'required',
            'numero_telefono'=>'required|min:7|max:15|numeric',
            'id_tipo_direccion'=>'required',
            'nombre_direccion'=>'required|min:5|max:50|',
        ];
    }
    public function messages()
    {
        return[
            'login.required'=>'El campo login de usuario es requerido',
            'apellidos.required'=>'El campo apellidos usuario es requerido',
            'nombres.required'=>'El campo nombres usuario es requerido',
            'id_provincia.required'=>'El campo provicia es requerido',
            'sexo.required'=>'El campo sexo es requerido',
            'clave.required'=>'El campo contraseña es requerido',
        ];
    }
}
