<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorB extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'=>'required',
            'autor'=>'required',
            'pagina'=>'int',
            'edit'=>'required',
            'txt'=>'int|min:13',
            'email'=>'email',
        ];
    }
}
