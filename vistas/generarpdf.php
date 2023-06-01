<?php
require('../fpdf/fpdf.php');
require "../clases/conexion.php";

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Reporte de Bitacoras', 1, 0, 'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function Content($datos)
    {
        $this->SetFont('Arial', '', 12);
        $this->Cell(40, 10, 'Nombre del Usuario:', 0, 0, 'L');
        $this->Cell(50, 10, $datos['nombrePersona'], 0, 1, 'L');

        $this->Cell(40, 10, 'Equipo:', 0, 0, 'L');
        $this->Cell(50, 10, $datos['nombreEquipo'], 0, 1, 'L');

        $this->Cell(40, 10, 'Fecha:', 0, 0, 'L');
        $this->Cell(50, 10, $datos['fecha'], 0, 1, 'L');

        $this->Cell(40, 10, 'Problema:', 0, 0, 'L');
        $this->MultiCell(0, 10, $datos['problema'], 0, 'L');

        $this->Cell(40, 10, 'Estatus:', 0, 0, 'L');
        $this->Cell(50, 10, $datos['estatus'], 0, 1, 'L');

        $this->Cell(40, 10, 'Solucion:', 0, 0, 'L');
        $this->MultiCell(0, 10, $datos['solucion'], 0, 'L');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Obtener los datos del usuario y el reporte
if (isset($mostrar) && is_array($mostrar)) {
    // Aquí debes realizar la consulta a la base de datos para obtener los datos del usuario
    $usuarioId = $mostrar['idUsuario'];

    // Realizar la consulta a la tabla t_usuarios
    // Ajusta la consulta según la estructura de tu base de datos y las tablas
    // Puedes usar JOIN para unir la tabla t_usuarios y t_personas
    // Asegúrate de escapar y sanear los datos para evitar ataques de SQL Injection
    $query = "SELECT 
    t_asignacion.id_asignacion,
    t_persona.nombres,
    t_persona.apellidos,
    areas.Nombre,
    t_cat_equipo.nombre,
    t_asignacion.marca,
    t_asignacion.modelo,
    t_asignacion.numero_asignacion,
    t_asignacion.serial
FROM
    t_asignacion
        INNER JOIN
    t_persona ON t_asignacion.id_persona = t_persona.id_persona
        INNER JOIN
    areas ON t_persona.oficina = areas.ID
        INNER JOIN
    t_cat_equipo ON t_asignacion.id_equipo = t_cat_equipo.id_equipo
WHERE
    t_asignacion.id_persona = 24";

    // Ejecutar la consulta y obtener los resultados
    // Asegúrate de ajustar el nombre de tu conexión a la base de datos y el método para obtener los resultados
    $result = $conexion->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Obtener los datos del usuario y el reporte
        $datos = array(
            'nombrePersona' => $row['nombres'] . ' ' . $row['apellidos'],
            'nombreEquipo' => $mostrar['nombreEquipo'],
            'fecha' => $mostrar['fecha'],
            'problema' => $mostrar['problema'],
            'estatus' => $mostrar['estatus'],
            'solucion' => $mostrar['solucion']
        );

        // Generar el contenido del PDF
        $pdf->Content($datos);
    } else {
        // Mostrar un mensaje de error o redireccionar si los datos no están disponibles
        $pdf->Cell(0, 10, 'Error: No se encontraron datos para generar el PDF', 0, 1, 'C');
    }
} else {
    // Mostrar un mensaje de error o redireccionar si los datos no están disponibles
    $pdf->Cell(0, 10, 'Error: No se encontraron datos para generar el PDF', 0, 1, 'C');
}

$pdf->Output();
?>
