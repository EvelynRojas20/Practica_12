<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLibros;
use App\Http\Controllers\ControladorClientes;

Route::view('/', 'Principal')->name('ing');
//Route::get('Clientes',[Controlador::class,'vistaCliente'])->name('cli');

//LIBRO
Route::get('libro/create',[ControladorLibros::class,'create'])->name('libro.create');
Route::post('libro', [ControladorLibros::class, 'store'])->name('libro.store');
Route::get('libro',[ControladorLibros::class,'index'])->name('libro.index');
Route::put('libro/{id}',[ControladorLibros::class,'update'])->name('libro.update');
Route::delete('libro/{id}',[ControladorLibros::class,'destroy'])->name('libro.destroy');

//CLIENTE
Route::get('cliente/create',[ControladorClientes::class,'create'])->name('cliente.create');
Route::post('cliente', [ControladorClientes::class, 'store'])->name('cliente.store');
Route::get('cliente',[ControladorLibros::class,'index'])->name('cliente.index');
