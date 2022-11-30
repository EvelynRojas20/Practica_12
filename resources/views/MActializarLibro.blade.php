<!-- Modal -->
<div class="modal fade" id="MActializarLibro{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MActializarLibro{{$consulta->idLibro}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('libro.update',$consulta->idLibro)}}">
                    @csrf 
                    {!!method_field('PUT')!!} 
                    <label class="form-label fs-4 fst-italic">Titulo del libro:</label>
                    <input type="text" name="titulo" class="form-control"  value="{{$consulta->titulo}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('titulo')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Autor:</label>
                    <input type="text" name="autor" class="form-control"  value="{{$consulta->autor}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('autor')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Cant. Paginas:</label>
                    <input type="text" name="pagina" class="form-control" value="{{$consulta->paginas}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('pagina')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Editorial:</label>
                    <input type="text" name="edit" class="form-control" value="{{$consulta->editorial}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('edit')}}</p>
                
                    <label class="form-label fs-4 fst-italic">ISBN:</label>
                    <input type="text" name="txt" class="form-control" value="{{$consulta->isbn}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('txt')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Email editorial:</label>
                    <input type="text" name="email" class="form-control" value="{{$consulta->email}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('email')}}</p>
            </div>
        <div class="modal-footer">
        <button herf="ConsultaLibros" type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>