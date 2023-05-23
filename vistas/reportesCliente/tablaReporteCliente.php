<?php 
    session_start();
    include "../../clases/conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $idUsuario = $_SESSION['usuario']['id'];
    $contador = 1;
    $sql = "SELECT
                reporte.id_reporte AS idReporte,
                reporte.id_usuario AS idUsuario,
                CONCAT(
                    persona.apellidos,
                    ' ',
                    persona.nombres
                ) AS nombrePersona,
                equipo.id_equipo AS idEquipo,
                equipo.nombre AS nombreEquipo,
                reporte.descripcion_problema AS problema,
                reporte.estatus AS estatus,
                reporte.solucion_problema AS solucion,
                reporte.fecha AS fecha
            FROM
                t_reportes AS reporte
            INNER JOIN t_usuarios AS usuario
            ON
                reporte.id_usuario = usuario.id_usuario
            INNER JOIN t_persona AS persona
            ON
                usuario.id_persona = persona.id_persona
            INNER JOIN t_cat_equipo AS equipo
            ON
                reporte.id_equipo = equipo.id_equipo AND reporte.id_usuario = '$idUsuario'";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="table table-bordered table-sm dt-responsive nowrap" id="tablaReportesDataTable" style="width:100%">
    <thead>
        <th>#</th>
        <th>Persona</th>
        <th>Dispositivo</th>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Estatus</th>
        <th>Solucion</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php while ($mostrar = mysqli_fetch_array($respuesta)) { ?>
        <tr>
            <td><?php echo $contador++; ?></td>
            <td><?php echo $mostrar['nombrePersona']; ?></td>
            <td><?php echo $mostrar['nombreEquipo'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['problema'] ?></td>
            <td>
                <?php  
                    $estatus = $mostrar['estatus'];
                    $cadenaEstatus = '<span class="badge badge-danger">Abierto</span>';
                    if ($estatus == 1) {
                        $cadenaEstatus = '<span class="badge badge-success">Cerrado</span>';
                    }
                    echo $cadenaEstatus;
                ?>
            </td>
            <td><?php echo $mostrar['solucion'] ?></td>
            <td>
                    <?php 
                        if($mostrar['solucion'] == ""){                      
                    ?>
                <button class="btn btn-danger btn-sm" 
                onclick="eliminarReporteCliente(<?php echo $mostrar['idReporte']?>)">
                    Eliminar
                </button>
                <?php }?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tablaReportesDataTable').DataTable({
            dom: 'Bfrtip',
        buttons : {
            buttons : [
                {
                    extend : 'copy',
                    className : 'btn btn-outline-info',
                    text : '<i class="far fa-copy"></i> COPIAR'
                },
                {
                    extend : 'csv',
                    className : 'btn btn-outline-primary',
                    text : '<i class="fas fa-file-csv"></i> CSV'
                },
                {
                    extend : 'excel',
                    className : 'btn btn-outline-success',
                    text : '<i class="far fa-file-excel"></i> EXCEL'
                },
                {
                    extend : 'pdf',
                    className : 'btn btn-outline-danger',
                    text : '<i class="far fa-file-pdf"></i> PDF'
                },
            ],
            dom : {
                button : {
                    className : 'btn'
                }
            }
        }
        });
    })
</script>
