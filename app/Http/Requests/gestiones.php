<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Gestiones extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.     *
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
            // 'anio'=>'unique',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date|after:fecha_inicio',
            'plan'=>'required',
            'tipo_gestion'=>'required',
            'periodo'=>'required|in:1,2',
        ];
    }
    public function messages()
    {
    return [
        // 'anio.max' => 'Seleccione un año Valido',
        'fecha_inicio.required'  => 'Fecha Inicio debe insertar',
        'fecha_fin.required'  => 'Fecha Fin debe insertar',
        'plan.required'  => 'Debe seleccionar un plan minimo para habilitar la gestion',
        // 'fecha_fin.after' => 'La fecha ingresada debe ser posterior a la fecha de Inicio de Gestion Ingresada en la casilla anterior',
        'periodo.in' => 'Debe ingresar un valor 1 o 2',
    ];
}
}
