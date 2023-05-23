
<!-- Modal -->
<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
<div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agctualizar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" id="idUsuario" name="idUsuario" hidden>
            <div class="row">
                    <div class="col-sm-4">
                        <label for="tipoDocumentou">Tipo de documento</label>
                        <select class="form-control" id="tipoDocumentou" name="tipoDocumentou" required>
                        <option value="">Seleccione una opción</option>
                        <option value="Cedula de ciudadania">Cédula de ciudadanía</option>
                        <option value="Cedula Extranjeria">Cédula de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="numeroDocumentou">Numero de documento</label>
                        <input type="text" class="form-control" id="numeroDocumentou" name="numeroDocumentou" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="apellidosu">Apellidos</label>
                        <input type="text" class="form-control" id="apellidosu" name="apellidosu" required>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-4">
                        <label for="nombresu">Nombres</label>
                        <input type="text" class="form-control" id="nombresu" name="nombresu">
                    </div>
                    <div class="col-sm-4">
                        <label for="telefonou">Telefono: </label>
                        <input type="text" class="form-control" id="telefonou" name="telefonou">
                    </div>
                    <div class="col-sm-4">
                        <label for="correou">Correo</label>
                        <input type="mail" class="form-control" id="correou" name="correou">
                    </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                        <label for="oficinau">oficina: </label>
                        <input type="text" class="form-control" id="oficinau" name="oficinau">
                    </div>
                    <div class="col-sm-4">
                        <label for="usuariou">Usuario</label>
                        <input type="text" class="form-control" id="usuariou" name="usuariou">
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <label for="idRolu">Rol de usuario</label>
                <select name="idRolu" id="idRolu" class="form-control">
                    <option value="1">Cliente</input>
                    <option value="2">Administrador</option>
                </select>
            </div>
      </div>
      <div class="row">
            <div class="col-sm-12">
            <label for="areau">Area</label>
            <select name="areau" id="areau" class="form-control">
                <option value="">Seleccione un área</option>
                <option value="1">Dep. Sistemas</option>
                <option value="2">Dep. Jurídico</option>
                <option value="3">Cartera</option>
                <option value="4">Análisis</option>
                <option value="5">Gestión Humana</option>
                <option value="6">Presidencia</option>
                <option value="7">Global Finanzas</option>
                <option value="8">Finanzas Centro</option>
              </select>
            </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
    </div>
</form>