<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
    
    public function attributes() {
        return [
            'login' => 'nickname',
            'password' => 'clave',
        ];
    }

public function messages() {
        $mensaje='El campo :attribute es obligatorio';
        $min='La longitud minima del campo :attribute es :min';
    return [
        'login.required' => 'Se requiere un :attribute.',
        'login.min'         => $min,
        'login.alpha_num'   => 'Tiene que ser alpha numerico',
        'password.required' => $mensaje,
        'password.min'      => $min,
    ];
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
   
        return [
            'login' => 'required|min:3|alpha_num',
            'password' => 'required|min:6',
            //
        ];
    }
    
    
}
