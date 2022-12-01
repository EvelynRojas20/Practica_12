@extends('plantilla')

@section('contenido')

    @if(session()->has('confirmacion'))  
      
      {!!"<script>Swal.fire(
        'Guardado',
        'Libro guardado',
        'success'
        )</script>"!!}

    @endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">Registrar Libro</h1>

    <div class="card text-center mb-5">
        <div class="card-body">
            <form method="post" action="{{route('libro.store')}}">
                @csrf 
                <label class="form-label fs-4 fst-italic">Titulo del libro:</label>
                <input type="text" name="titulo" class="form-control"  value="{{old('titulo')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('titulo')}}</p>
                
                <label class="form-label fs-4 fst-italic">Autor:</label>
                <input type="text" name="autor" class="form-control"  value="{{old('autor')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('autor')}}</p>
                
                <label class="form-label fs-4 fst-italic">Cant. Paginas:</label>
                <input type="text" name="pagina" class="form-control" value="{{old('pagina')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('pagina')}}</p>
                
                <label class="form-label fs-4 fst-italic">Editorial:</label>
                <input type="text" name="edit" class="form-control" value="{{old('edit')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('edit')}}</p>
                
                <label class="form-label fs-4 fst-italic">ISBN:</label>
                <input type="int" name="txt" class="form-control" value="{{old('txt')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('txt')}}</p>
                
                <label class="form-label fs-4 fst-italic">Email editorial:</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('email')}}</p>

            
    
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success">Guardar recuerdo</button>
        </form>
        </div>
</div>


</div>

 @stop
