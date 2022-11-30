<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorB;


class Controlador extends Controller
{
   
    public function vistaConLibros(){
        return view('ConsultaLibros');
    }
    public function GuardaCliente(ValidadorB $req){
        return redirect()->route('cli')->with('confirmacion','Cliente Guardado');
        
    }
}
