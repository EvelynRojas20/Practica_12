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
        return view('Clientes');
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

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
