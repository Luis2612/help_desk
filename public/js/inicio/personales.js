function datosPersonalesInicio (idUsuario){
    $.ajax({
        type: "POST",
        data:"idUsuario=" + idUsuario,
        url:"../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function (respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#tipoDocumento').text(respuesta['tipoDocumento']);
            $('#numeroDocumento').text(respuesta['numeroDocumento']);
            $('#apellidos').text(respuesta['apellidos']);
            $('#nombres').text(respuesta['nombres']);
            $('#telefono').text(respuesta['telefono']);
            $('#correo').text(respuesta['correo']);
            $('#area').text(respuesta['area']);
            $('#oficina').text(respuesta['oficina']);
        }
    })
}