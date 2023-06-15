<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Mantenimientos</title>
    <!-- Agrega aquí los enlaces a las librerías de Bootstrap -->
    <link rel="stylesheet" href="../../public/bootstrap/bootstrap.min.css">
    <script src="../../public/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light">Formulario de Mantenimientos</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <select name="usuario" id="usuario" class="form-select">
                            <!-- Aquí puedes obtener los usuarios de la base de datos y generar las opciones -->
                            <?php
                            // Conexión a la base de datos
                            $conexion = mysqli_connect("localhost", "root", "", "helpdesk1");

                            // Consulta para obtener los usuarios
                            $consulta = "SELECT id_persona, nombres, apellidos FROM t_persona";
                            $resultados = mysqli_query($conexion, $consulta);

                            // Generar opciones para cada usuario
                            while ($fila = mysqli_fetch_assoc($resultados)) {
                                echo "<option value='" . $fila['id_persona'] . "'>" . $fila['nombres'] . " " . $fila['apellidos'] . "</option>";
                            }

                            // Cerrar conexión
                            mysqli_close($conexion);
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable:</label>
                        <input type="text" name="responsable" id="responsable" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar Mantenimiento</button>
                </form>
                <hr>
            </div>
        </div>
    </div>

    <?php
    include "../footer.php";
    ?>
</body>
</html>