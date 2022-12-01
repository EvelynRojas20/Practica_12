@extends('plantilla')

@section('contenido')
  @if(session()->has('Actualiza'))
      
      {!!"<script>Swal.fire(
        'Correcto',
        'Cliente modificado',
        'success'
        )</script>"!!}

  @endif
  @if(session()->has('Elimina'))
      
      {!!"<script>Swal.fire(
        'Correcto',
        'Cliente eliminado',
        'success'
        )</script>"!!}

  @endif
<h1 class="display-4 text-center mt-5 mb-5">Clientes</h1>
<table class="table table-info table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Ine</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tablaC as $consulta)
    @include('MActualizarC')
    @include('MEliminarC')
    <tr>
      <th scope="row">{{$consulta->idCliente}}</th>
      <td>{{$consulta->nombre}}</td>
      <td>{{$consulta->email}}</td>
      <td>{{$consulta->ine}}</td>
      <td>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#MActualizarC{{$consulta->idCliente}}">
        <i class="bi bi-menu-button-wide-fill"></i> 
        </button>
      </td>
      <td>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#MEliminarC{{$consulta->idCliente}}">
        <i class="bi bi-trash3-fill"></i>
        </button>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

 @stop
