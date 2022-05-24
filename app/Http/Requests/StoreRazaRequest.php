<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRazaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //en aqui se puede poner usuarios o roles autorizados
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'data.attributes.raza'=>[
                'required', 'min:3','max:50',"regex:/^[\pL\s\-]+$/u","unique:razas,raza"
            ]
        ];
    }
}
