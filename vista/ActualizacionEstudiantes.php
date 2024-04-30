<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion Estudiante</title>
</head>
<body>
    
    <h1>Actualizacion del Estudiante</h1>
    <?php include("../controlador/ActualizarEstudiante.php"); ?>

    <form action="ActualizacionEstudiante.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"]; ?>">
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value="<?php echo $Registro["PrimerNombre"]; ?>"><br>
        <label for="CodigoEstudiante">Codigo:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="<?php echo $Registro["CodigoEstudiante"]; ?>"><br>
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value="<?php echo $Registro["SegundoNombre"]; ?>"><br>
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value="<?php echo $Registro["PrimerApellido"]; ?>"><br>
        <label for="SegundoApellido">SegundoApellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value="<?php echo $Registro["SegundoApellido"]; ?>"><br>
        <label for="CursoEstudiante">Curso Estudiante:</label>
        <input type="number" name="CursoEstudiante" id="Curso" value="<?php echo $Registro["Curso"] ?>"><br>

        <label for="EspecialidadEstudiante">Especialidad</label>
        <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>

        <label for="ProyectoEstudiante">Proyecto</label>
        <?php include("../controlador/ComboProyectos.php"); ?>
        <br>

       

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label> 
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento"><br>
        <button type="submit">Actualizar Estudiante</button><br>

    </form>

</body>
</html>
