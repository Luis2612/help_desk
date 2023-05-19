<?php 
    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();
    $datos = array(
        "idUsuario" =>$_POST['idUsuarioEliminar'],
        "idPersona" =>$_POST['idPersonaEliminar']
    );
    echo $Usuarios->eliminarUsuario($datos);
?>