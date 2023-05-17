function datosPersonalesInicio (idUsuario){
    $.ajax({
        type: "POST",
        data:"idUsuario=" + idUsuario,
        url:"../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function (respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#materno').text(respuesta['paterno']);
            $('#paterno').text(respuesta['materno']);
            $('#nombre').text(respuesta['nombrePersona']);
            $('#telefono').text(respuesta['telefono']);
            $('#correo').text(respuesta['correo']);
            $('#edad').text(respuesta['fechaNacimiento']);
        }
    })
}