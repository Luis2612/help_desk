
<!-- Modal -->
<form id="frmAgregarUsuario" method="POST" onsubmit="return agregarNuevoUsuario()">
<div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                    <div class="col-sm-4">
                        <label for="tipo_documento">Tipo de documento</label>
                        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                        <option value="">Seleccione una opción</option>
                        <option value="Cedula de ciudadania">Cédula de ciudadanía</option>
                        <option value="Cedula Extranjeria">Cédula de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="numero_documento">Numero de documento</label>
                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-4">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres">
                    </div>
                    <div class="col-sm-4">
                        <label for="telefono">telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="col-sm-4">
                        <label for="correo">Correo</label>
                        <input type="mail" class="form-control" id="correo" name="correo">
                    </div>
            </div>
            <div class="row">
                        <div class="col-sm-4">
                        <label for="oficina">Oficina</label>
                        <input type="text" class="form-control" id="oficina" name="oficina">
                    </div>
                    <div class="col-sm-4">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario">
                    </div>
                    <div class="col-sm-4">
                        <label for="password">Contraseña</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <label for="idRol">Rol de usuario</label>
                <select name="idRol" id="idRol" class="form-control" required>
                    <option value="">Seleccione una Opcion</input>   
                    <option value="1">Cliente</input>
                    <option value="2">Administrador</option>
                </select>
            </div>
      </div>
      <div class="row">
            <div class="col-sm-12">
            <label for="area">Area</label>
            <select name="area" id="area" class="form-control">
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
        <span class="btn btn-secondary" data-dismiss="modal">Cerrar</span>
        <button class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
    </div>
</form>




