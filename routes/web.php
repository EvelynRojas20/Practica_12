<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::view('/', 'Principal')->name('ing');
//Route::get('Registro',[Controlador::class,'vistaRegistro'])->name('reg');
Route::get('Clientes',[Controlador::class,'vistaCliente'])->name('cli');
Route::get('libro/create',[ControladorLibros::class,'create'])->name('libro.create');

//Request por POST
Route:: post('KP', [Controlador::class, 'guardarInfo'])->name('VP');
Route:: post('LP', [Controlador::class, 'GuardaCliente'])->name('LO');