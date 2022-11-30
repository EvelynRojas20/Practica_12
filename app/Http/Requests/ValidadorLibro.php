<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibro extends FormRequest
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
            'pagina'=>'required',
            'edit'=>'required',
            'txt'=>'required',
            'email'=>'required'
        ];
    }
}
