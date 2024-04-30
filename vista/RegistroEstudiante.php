<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Estudiante</title>
</head>
<body>
    
    <h1>Registro del Estudiante</h1>
    <?php include("../controlador/RegistrarEstudiante.php"); ?>

    <form action="RegistroEstudiante.php" method="post">
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>
        <label for="CodigoEstudiante">Codigo:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido"><br>
        <label for="SegundoApellido">SegundoApellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido"><br>
        <label for="CursoEstudiante">Curso Estudiante:</label>
        <input type="number" name="CursoEstudiante" id="CursoEstudiante"><br>

        <label for="EspecialidadEstudiante">Especialidad</label>
        <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>

        <label for="ProyectoEstudiante">Proyecto</label>
        <?php include("../controlador/ComboProyectos.php"); ?>
        <br>

       

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label> 
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento"><br>
        <button type="submit">Registrar Estudiante</button><br>

    </form>

</body>
</html>
