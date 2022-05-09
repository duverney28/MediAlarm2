@extends('layouts.app')
@section('content')

<div class="container">

  <div id="agenda">

  </div>


</div>



<!-- Button trigger modal -->

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medicamentos">
 
</button>-->

<!-- Modal -->
<div class="modal fade" id="medicamentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis Medicamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="" id="formulariodeMedicamentos">

          {!! csrf_field()!!}

          <div class="form-group">
            <label for="id" class="form-label"></label>
            <input type="hidden" class="form-control" id="id" name="id" value="" placeholder="id" required>
          </div>
          <div class="form-group">
            <label for="text" class="form-label"></label>
            <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ Auth::user()->id }}" placeholder="Escribe un medicamento" required>
          </div>
          <div class="form-group">
            <label for="text" class="form-label">Nombre Medicamento</label>
            <input type="text" class="form-control" id="name" name="title" value="" placeholder="Escribe un medicamento" required>
          </div>

          <div class="form-group">
            <label for="validationDefault01" class="form-label">Frecuencia</label>
            <input type="text" class="form-control" id="frecuencia" name="frecuencia" value="" placeholder="Escribe la frecuencia de toma del medicamento" required>
          </div>
          <div class="form-group">
            <label for="text" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" value="" placeholder="Hora toma del medicamento" required>
          </div>
          <div class="form-group">
            <label for="start" class="form-label">start</label>
            <input type="date" class="form-control" id="start" name="start" value="" placeholder="inicio toma medicamento" required>
          </div>
         
          <div class="form-group">
            <label for="end" class="form-label">end</label>
            <input type="date" class="form-control" id="end" name="end" value="" placeholder="final toma medicamento" required>
          </div>

          <div class="form-group">
            <label for="color" class="form-label">Fondo</label>
            <input type="color" class="form-control" id="color" name="color" value="" placeholder="" required>
          </div>

          <div class="form-group">
            <label for="textColor" class="form-label">Color del Texto</label>
            <input type="color" class="form-control" id="textColor" name="textColor" value="" placeholder="" required>
          </div>

        </form>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>


@endsection