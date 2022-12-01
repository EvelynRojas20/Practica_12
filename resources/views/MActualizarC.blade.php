<!-- Modal -->
<div class="modal fade" id="MActualizarC{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MActualizarC{{$consulta->idCliente}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('cliente.update',$consulta->idCliente)}}">
                    @csrf 
                    {!!method_field('PUT')!!} 
                    <div class="mb-3">
                      <label class="form-label fs-4 fst-italic">Nombre completo:</label>
                      <input type="text" name ="Nombre" class="form-control" value="{{$consulta->nombre}}">
                      <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Nombre')}}</p>
                    </div>
                    <div class="mb-3">
                      <label class="form-label fs-4 fst-italic">Email:</label>
                      <input type="text" name ="ema" class="form-control" value="{{$consulta->email}}">
                      <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('ema')}}</p>
                    </div>

                    <div class="mb-3">
                      <label class="form-label fs-4 fst-italic">No. INE:</label>
                      <input type="int" name ="ine" class="form-control" value="{{$consulta->ine}}">
                      <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('ine')}}</p>
                    </div>

                  </div>
        <div class="modal-footer">
        <button herf="ConsultaClientes" type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>