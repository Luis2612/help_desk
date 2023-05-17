function actualizarDatosPersonales() {
    $.ajax({
        type: "POST",
        data:$('#frmActuializarDatosPersonales').serialize(),
        url:"../procesos/inicio/actualizarPersonales.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1){                
                Swal.fire(":D", "actualizado con exito!" , "success");
                location.reload();
            } else {
                Swal.fire(":(", "Fallo al actualizar!" + respuesta, "error");
            }
            
        }
    });
    return false;
}
function obtenerDatosPersonalesInicio(idUsuario){
    $.ajax({
        type: "POST",
        data:"idUsuario=" + idUsuario,
        url:"../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function (respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#paternoinicio').val(respuesta['paterno']);
            $('#maternoinicio').val(respuesta['materno']);
            $('#nombreinicio').val(respuesta['nombrePersona']);
            $('#telefonoinicio').val(respuesta['telefono']);
            $('#correoinicio').val(respuesta['correo']);
            $('#fechainicio').val(respuesta['fechaNacimiento']);
        }
    })
}