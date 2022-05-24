<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOriginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'data.attributes.codigo_unico' => [
                'required', 'min:3', 'max:15','alpha_num', "unique:origins,codigo_unico"
            ],
            'data.attributes.descripcion' => [
                'required', 'min:5', 'max:50','regex:/^[\pL\s\-]+$/u'
            ],
            'data.attributes.peso' => [
                'required', 'numeric', 'regex:/^[\d]{0,11}(\.[\d]{1,2})?$/' //numerico 1 o 2 decimales
            ],
            'data.attributes.altura' => [
                'required', 'numeric', 'regex:/^[\d]{0,11}(\.[\d]{1,2})?$/' //numerico 1 o 2 decimales
            ],
            'data.attributes.edad' => [
                'required', 'numeric', 'between:0,300'
            ],
            'data.attributes.raza' => [
                'required', 'numeric', 'min:1'
            ],
            'data.attributes.observaciones' => [
                'required', 'min:3', 'max:15', 'regex:/^[\pL\s\-]+$/u'
            ]
        ];
    }

    //este medodo sobreescribe validated para que vaya a attributes segun especificacion json:api
  /*   public function validated()
    {
        return parent::validated()['data']['attributes'];
    } */
}
