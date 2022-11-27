@extends('Plantilla')

@section('contenido')
@if(session('confirmacion'))
      
      <script>Swal.fire(
        'Guardado',
        'Libro {{session('confirmacion')['titulo']}} guardado',
        'success'
        )</script>

    @endif
<form method="post" action="KP">
@csrf
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Titulo:</label>
        <input type="text" name ="titulo" class="form-control" value="{{old('titulo')}}">
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Autor:</label>
        <input type="text" name ="autor" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Paginas:</label>
        <input type="text" name ="pagina" class="form-control">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('pagina')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Editorial:</label>
        <input type="text" name ="edit" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">ISBN:</label>
        <input type="text" name ="txt" class="form-control">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('txt')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Email de Editorial:</label>
        <input type="text" name ="email" class="form-control">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('email')}}</p>
    </div>
 
        <button class="btn btn-primary" type="submit">Registrar</button>
   
</form>
 @stop
