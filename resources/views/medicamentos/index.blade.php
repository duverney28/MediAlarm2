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
            <label for="hidden" class="form-label"></label>
            <input type="hidden" class="form-control" id="" name="" value="" placeholder="">
          </div>

          <div class="form-group">
            <select  class="form-control" id="tipomedicamento" name="tipomedicamento"  class="form-select" aria-label="Default select example">
              <option selected>Tipo Medicamento</option>
              <option value="pastilla">pastilla</option>
              <option value="solucion">solucion</option>
              <option value="inyeccion">inyeccion</option>
              <option value="gotas">gotas</option>
              <option value="inhalador">inhalador</option>
            </select>
          </div>

          

          <!-- <div class="form-group">
            <select  class="form-control" id="dosismedi" name="dosismedi" class="form-select" aria-label="Default select example">
              <option selected>Dosis del Medicamento</option>
              <option value="">gramos</option>
              <option value="">IU</option>
              <option value="">mcg</option>
              <option value="">mEQ</option>
              <option value="">mg/ml</option>
              <option value="">mcg/ml</option>
              <option value="">mg</option>
              <option value="">mL %</option>
              
            </select>
          </div> -->
          
         <div class="form-group">
            <label for="text" class="form-label">Dosis del Medicamento</label>
            <input type="text" class="form-control" id="dosismedi" name="dosismedi" value="" placeholder="gr,IU,mcg,mEq,mg.." required>
          </div> 
          
          <div class="form-group">
            <label for="validationDefault01" class="form-label">Numero de pastillas/gotas/solucion..</label>
            <input type="text" class="form-control" id="numeropastillas" name="numeropastillas" value="" placeholder="escribe el numero de medicamento" required>
          </div>

          <div class="form-group">
            <label for="text" class="form-label">Fecha vencimiento del Medicamento</label>
            <input type="date" class="form-control" id="fechavencimiento" name="fechavencimiento" value="" placeholder="fecha vencimiento del medicamento" required>
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