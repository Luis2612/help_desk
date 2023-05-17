<?php 
    session_start();
    $idUsuario = $_SESSION['usuario']['id'];
    
        include "../../clases/Inicio.php";

    $datos = array(
        'paterno'=> $_POST['paternoinicio'],
        'materno'=> $_POST['maternoinicio'],
        'nombre'=> $_POST['nombreinicio'],
        'telefono'=> $_POST['telefonoinicio'],
        'correo'=> $_POST['correoinicio'],
        'fecha'=> $_POST['fechainicio'],
        'idUsuario' => $idUsuario
    );

    $Inicio = new Inicio();
    echo $Inicio->actualizarPersonales($datos);

?>

 