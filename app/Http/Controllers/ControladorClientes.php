<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;
use DB;
use Carbon\Carbon;

class ControladorClientes extends Controller
{
    public function index()
    {
        $tablaC = DB::table('tb_clientes')->get();
        return view('ConsultaClientes', compact('tablaC'));
    }

    public function create()
    {
        return view('Clientes');
    }

    public function store(ValidadorCliente $request)
    {
        DB::table('tb_clientes')->insert([
            "nombre"=>$request->input('Nombre'),
            "email"=>$request->input('ema'),
            "ine"=>$request->input('ine'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('cliente/create')->with('confirmacion',"Tu recuerdo a sido guardado");
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(ValidadorCliente $request, $id)
    {
        DB::table('tb_clientes')->where('idCliente', $id)->update([
            "nombre"=>$request->input('Nombre'),
            "email"=>$request->input('ema'),
            "ine"=>$request->input('ine'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('cliente')->with('Actualiza',"Tu recuerdo a sido guardado");
    }


    public function destroy($id)
    {
        DB::table('tb_clientes')->where('idCliente', $id)->delete();
        return redirect('cliente')->with('Elimina',"Tu recuerdo se elimino");
    }
}
