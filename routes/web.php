<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'Principal')->name('ing');
Route::get('Registro',[Controlador::class,'vistaRegistro'])->name('reg');

//Request por POST
Route:: post('KP', [Controlador::class, 'guardarInfo'])->name('VP');