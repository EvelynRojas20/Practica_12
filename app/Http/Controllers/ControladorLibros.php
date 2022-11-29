<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorB;
use DB;
use Carbon\Carbon;

class ControladorLibros extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Registro');
    }

    public function store(ValidadorB $request)
    {
        DB::table('tb_libros')->insert([
            "titulo"=>$request->input('titulo'),
            "autor"=>$request->input('autor'),
            "paginas"=>$request->input('pagina'),
            "editorial"=>$request->input('edit'),
            "isbn"=>$request->input('txt'),
            "email"=>$request->input('email'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('libro/create')->with('confirmacion',"Tu recuerdo a sido guardado");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
