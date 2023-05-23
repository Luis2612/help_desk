<?php 
    include "conexion.php";

    class Inicio extends Conexion{
        public function actualizarPersonales($datos){
            $conexion = Conexion::conectar();
            $idUsuario = $datos['idUsuario'];
            $sql = "SELECT id_persona FROM t_usuarios WHERE id_usuario = '$idUsuario'";
            $respuesta = mysqli_query($conexion,$sql);
            $idPersona = mysqli_fetch_row($respuesta)[0];
            $sql = "UPDATE
                        t_persona
                    SET
                        tipoDocumento = ?,
                        numeroDocumento = ?,
                        apellidos = ?,
                        nombres = ?,
                        telefono = ?,
                        correo = ?,
                    WHERE
                        id_persona = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param("sssssss",$datos['tipoDocumento'],
                                         $datos['numeroDocumento'],
                                         $datos['apellidos'],
                                         $datos['nombres'],
                                         $datos['telefono'],
                                         $datos['correo'],
                                         $idPersona);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
    }
?>