@extends('Plantilla')

@section('contenido')
    @if(session()->has('confirmacion'))  
      
      {!!"<script>Swal.fire(
        'Guardado',
        'Cliente guardado',
        'success'
        )</script>"!!}

    @endif

<div class="container">   
<form method="post" action="{{route('cliente.store')}}">
@csrf
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Nombre completo:</label>
        <input type="text" name ="Nombre" class="form-control" value="{{old('Nombre')}}">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Nombre')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">Email:</label>
        <input type="text" name ="ema" class="form-control" value="{{old('ema')}}">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('ema')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fs-4 fst-italic">No. INE:</label>
        <input type="int" name ="ine" class="form-control" value="{{old('ine')}}">
        <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('ine')}}</p>
    </div>
 
        <button class="btn btn-primary" type="submit">Registrar Cliente</button>
   
</form>
    </div>
 @stop
