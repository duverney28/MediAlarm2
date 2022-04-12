@extends('layouts.app')
@section('content')

<div class="container">
    
   <div id="agenda">
      calendario
   </div>


</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medicamentos">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="medicamentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis Medicamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">

        <div class="form-group">
          <label for="text" class="form-label">id</label>  
          <input type="text" class="form-control" id="id" value="" placeholder="id"required>
        </div>

        <div class="form-group">
          <label for="validationDefault01" class="form-label">Nombre Medicamento</label>
          <input type="text" class="form-control" id="name" value="" placeholder="Escribe un medicamento"required>
        </div>

        <div class="form-group">
          <label for="validationDefault01" class="form-label">Frecuencia</label>
          <input type="text" class="form-control" id="frecuencia" value="" placeholder="Escribe la frecuencia de toma del medicamento"required>
        </div>
        <div class="form-group">
          <label for="time" class="form-label">Hora</label>  
          <input type="time" class="form-control" id="time" value="" placeholder="Hora toma del medicamento"required>
        </div>
        <div class="form-group">
          <label for="date" class="form-label">start</label>  
          <input type="date" class="form-control" id="start" value="" placeholder="inicio toma medicamento"required>
        </div>
        <div class="form-group">
          <label for="date" class="form-label">end</label>  
          <input type="date" class="form-control" id="end" value="" placeholder="final toma medicamento"required>
        </div>
        
        </form>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-success" id = "btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id = "btnModificar">Modificar</button>
         <button type="button" class="btn btn-danger" id = "btnEliminar">Eliminar</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>


@endsection