<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorCliente extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Nombre'=>'required',
            'ema'=>'required',
            'ine'=>'required'
        ];
    }
}
