<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorB;


class Controlador extends Controller
{
    public function vistaRegistro(){
        return view('Registro');
    }
    public function guardarInfo(ValidadorB $req){
        $titulo=$req->input('titulo');
        //return view('Registro', compact('titulo'))->with('confirmacion');
        return redirect('Registro')->with('confirmacion', compact('titulo'));
        //return 'Todo correcto: Libro “xxxxxx” guardado';
    }
}
