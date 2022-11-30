<!-- Modal -->
<div class="modal fade" id="EliminarLibro{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EliminarLibro{{$consulta->idLibro}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            {{$consulta->titulo}}
            {{$consulta->autor}}
      </div>
      <div class="modal-footer">
        <form action="{{route('libro.destroy',$consulta->idLibro)}}" method="POST">
            @csrf
            @method('delete')
            <button herf="ConsultaLibros" type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Regresar</button>
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>