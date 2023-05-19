
  <!-- Modal -->
  <form id="frmActualizaPassword" onsubmit="return resetPassword()" method="POST">
  <div class="modal fade" id="modalResetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Resetear Contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" hidden id="idUsuarioReset" name="idUsuarioReset">
          <label for="">Actualizar Contraseña</label>
          <input type="text" 
          id="passwordReset" 
          name="passwordReset" 
          class="form-control" 
          required>
    
        
        </div>
        <div class="modal-footer">
          <span class="btn btn-secondary" data-dismiss="modal">Cerrar</span>
          <button class="btn btn-warning">Cambiar Contraseña</button>
        </div>
      </div>
    </div>
      </div>
      </form>
