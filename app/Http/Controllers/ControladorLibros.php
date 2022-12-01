<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibro;
use DB;
use Carbon\Carbon;

class ControladorLibros extends Controller
{
    public function index()
    {
        $tablaL = DB::table('tb_libros')->get();
        return view('ConsultaLibros', compact('tablaL'));
    }

    public function create()
    {
        return view('Registro');
    }

    public function store(ValidadorLibro $request)
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

  
    public function update(ValidadorLibro $request, $id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->update([
            "titulo"=>$request->input('titulo'),
            "autor"=>$request->input('autor'),
            "paginas"=>$request->input('pagina'),
            "editorial"=>$request->input('edit'),
            "isbn"=>$request->input('txt'),
            "email"=>$request->input('email'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('libro')->with('Actualizar',"Tu recuerdo a sido guardado");
    }

  
    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->delete();
        return redirect('libro')->with('Eliminar',"Tu recuerdo se elimino");
    }
}
