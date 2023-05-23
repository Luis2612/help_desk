$(document).ready(function(){
    $('#tablaUsuarioLoad').load("usuarios/tablaUsuarios.php");
});

//Función para agregar un nuevo usuario desde la tabla
function agregarNuevoUsuario(){
    $.ajax({
        type: "POST",
        data: $('#frmAgregarUsuario').serialize(),
        url: "../procesos/usuarios/crud/agregarNuevoUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaUsuarioLoad').load("usuarios/tablaUsuarios.php");
                $('#frmAgregarUsuario')[0].reset();
                Swal.fire(":D" , "Aregado con exito!" , "success");    
            } else {
                    Swal.fire(":c","Error al cargar" + respuesta, "error");
            }

        }
    });
    return false;
}

function obtenerDatosUsuario(idUsuario){
    $.ajax({
            type: "POST",
            data : "idUsuario=" + idUsuario,
            url :"../procesos/usuarios/crud/obtenerDatosUsuario.php",
            success : function(respuesta){
                respuesta = jQuery.parseJSON(respuesta);
                $('#idUsuario').val(respuesta['idUsuario']);
                $('#paternou').val(respuesta['paterno']);
                $('#maternou').val(respuesta['materno']);
                $('#nombreu').val(respuesta['nombrePersona']);
                $('#fechaNacimientou').val(respuesta['fechaNacimiento']);
                $('#sexou').val(respuesta['sexo']);
                $('#telefonou').val(respuesta['telefono']);
                $('#correou').val(respuesta['correo']);
                $('#usuariou').val(respuesta['nombreUsuario']);
                $('#idRolu').val(respuesta['idRol']);
                $('#ubicacionu').val(respuesta['ubicacion']);
                
 
            }
        });
}

function actualizarUsuario(){
    $.ajax ({
            type : "POST",
            data:$('#frmActualizarUsuario').serialize(),
            url :"../procesos/usuarios/crud/actualizarUsuario.php",
            success: function(respuesta){
                respuesta = respuesta.trim();
                $("#modalActualizarUsuarios").html(respuesta);
              if (respuesta == 1) {
                $('#modalActualizarUsuarios').modal('hide');
                $('#tablaUsuarioLoad').load("usuarios/tablaUsuarios.php");
                Swal.fire(":D" , "Actualizado con exito!" , "success");    
            } else {
                    Swal.fire(":c","Error al actualizar" + respuesta, "error");
            }

            }
    });

    return false;
}

function agregarIdUsuarioReset(idUsuario){
    $('#idUsuarioReset').val(idUsuario);
}

function resetPassword(){
    $.ajax({
        type:"POST",
        data:$('#frmActualizaPassword').serialize(),
        url:"../procesos/usuarios/extras/resetPassword.php",
        success:function(respuesta) {
            respuesta = respuesta.trim();
              if (respuesta == 1) {
                $('#modalResetPassword').modal('hide');
                Swal.fire(":D" , "Cambio con exito!" , "success");    
            } else {
                    Swal.fire(":c","Error al Cambiar" + respuesta, "error");
            }


        }
    });
    return false;
}
function cambiarEstatusUsuario(idUsuario, estatus){
    $.ajax({
        type:"post",
        data: "idUsuario=" + idUsuario + "&estatus=" + estatus,
        url: "../procesos/usuarios/extras/cambioEstatus.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaUsuarioLoad').load("usuarios/tablaUsuarios.php");
              Swal.fire(":D" , "Cambio de estatus con exito!" , "success");    
          } else {
                  Swal.fire(":c","Error al cambiar el estatus" + respuesta, "error");
          }
        }

    });
}
function eliminarUsuario(idUsuario, idPersona){
    Swal.fire({
        title: 'Estas seguro de eliminar este usuario?',
        text: "Una vez eliminado no podra ser recuperado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI, Seguro!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                data: "idUsuario=" + idUsuario + "&idPersona=" + idPersona,
                url:"../procesos/usuarios/crud/eliminarUsuario.php",
                success:function(respuesta) {
                    respuesta = respuesta.trim();
                    if (respuesta == 1) {
                        $('#tablaUsuarioLoad').load("usuarios/tablaUsuarios.php");
                      Swal.fire(":D" , "Usuario eliminado con extito!" , "warning");    
                  } else {
                          Swal.fire(":c","Error al eliminar el usuario" + respuesta, "error");
                  }
        
                }
            });
        }
        })
        return false;
    }