<?php
    include "conexion.php";

    class Asignacion extends Conexion{
        public function agregarAsignacion($datos){
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_asignacion (id_persona,
                                 id_equipo,
                                 marca,
                                 modelo,                                 
                                 numero_asignacion,
                                 serial)
                    VALUES (?, ?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('iissss',  $datos['idPersona'],
                                             $datos['idEquipo'],
                                             $datos['marca'],
                                             $datos['modelo'],
                                             $datos['numeroAsignacion'],
                                             $datos['serial']);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function eliminarAsigancion($idAsignacion){
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM t_asignacion where id_asignacion = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i',$idAsignacion);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
    }
?>