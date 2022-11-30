<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLibros;
use App\Http\Controllers\ControladorClientes;

Route::view('/', 'Principal')->name('ing');
Route::get('Clientes',[Controlador::class,'vistaCliente'])->name('cli');
//LIBRO
Route::get('libro/create',[ControladorLibros::class,'create'])->name('libro.create');
Route::post('libro', [ControladorLibros::class, 'store'])->name('libro.store');

//CLIENTE
Route::get('cliente/create',[ControladorClientes::class,'create'])->name('cliente.create');
Route::post('cliente', [ControladorClientes::class, 'store'])->name('cliente.store');