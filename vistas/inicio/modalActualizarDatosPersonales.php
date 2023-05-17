<form id="frmActuializarDatosPersonales" method="POST" onsubmit="return actualizarDatosPersonales()">
<!-- Modal -->
<div class="modal fade" id="modalActualizarDatosPersonales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modalActualizar los Datos Personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <label for="paternoinicio">Primer Apellido</label>
        <input type="text" class="form-control" id="paternoinicio" name="paternoinicio">
        <label for="maternoinicio">Segundo Apellido</label>
        <input type="text" class="form-control" id="maternoinicio" name="maternoinicio">
        <label for="nombreinicio">Nombre</label>
        <input type="text" class="form-control" id="nombreinicio" name="nombreinicio">
        <label for="telefonoinicio">Telefono</label>
        <input type="text" class="form-control" id="telefonoinicio" name="telefonoinicio">
        <label for="correoinicio">correo</label>
        <input type="text" class="form-control" id="correoinicio" name="correoinicio">
        <label for="fechainicio">fecha de nacimiento</label>
        <input type="date" class="form-control" id="fechainicio" name="fechainicio">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>
</form>