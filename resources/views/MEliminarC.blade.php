<!-- Modal -->
<div class="modal fade" id="MEliminarC{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MEliminarC{{$consulta->idCliente}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            {{$consulta->nombre}}
            {{$consulta->email}}
      </div>
      <div class="modal-footer">
        <form action="{{route('cliente.destroy',$consulta->idCliente)}}" method="POST">
            @csrf
            @method('delete')
            <button herf="ConsultaClientes" type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Regresar</button>
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>