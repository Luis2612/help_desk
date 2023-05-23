<?php 
    session_start();
    $idUsuario = $_SESSION['usuario']['id'];
    
        include "../../clases/Inicio.php";

    $datos = array(
        'tipoDocumento'=> $_POST['tipoDocumentoinicio'],
        'numeroDocumento'=> $_POST['numeroDocumentoinicio'],
        'nombres'=> $_POST['nombresinicio'],
        'telefono'=> $_POST['telefonoinicio'],
        'correo'=> $_POST['correoinicio'],
        'fecha'=> $_POST['fechainicio'],
        'idUsuario' => $idUsuario
    );

    $Inicio = new Inicio();
    echo $Inicio->actualizarPersonales($datos);

?>

 