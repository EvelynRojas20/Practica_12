@extends('plantilla')

@section('contenido')
<h1 class="display-4 text-center mt-5 mb-5">Registros de Libros</h1>
<table class="table table-info table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Cantidad de paginas</th>
      <th scope="col">Editorial</th>
      <th scope="col">ISBN</th>
      <th scope="col">Email editorial</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tablaL as $consulta)
    <tr>
      <th scope="row">{{$consulta->idLibro}}</th>
      <td>{{$consulta->titulo}}</td>
      <td>{{$consulta->autor}}</td>
      <td>{{$consulta->paginas}}</td>
      <td>{{$consulta->editorial}}</td>
      <td>{{$consulta->isbn}}</td>
      <td>{{$consulta->email}}</td>
      <td>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="bi bi-menu-button-wide-fill"></i> 
        </button>
      </td>
      <td>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="bi bi-trash3-fill"></i>
        </button>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

 @stop
