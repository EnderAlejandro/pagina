<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proyectos</title>
</head>
<body>
    <h1>Registro de Proyectos</h1>
    <?php include("../controlador/RegistrarProyecto.php"); ?>

    <form action="RegistroProyectos.php" method="post">
        <label for="CodigoProyecto">Codigo proyecto:</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto"><br>
        <label for="NombreProyecto">Nombre del proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
        <label for="ResumenProyecto">Resumen:</label>
        <textarea name="ResumenProyecto" id="ResumenProyecto" rows="5" cols="20"></textarea><br>
        <label for="FechaDeRegistroProyecto">Fecha de Registro:</label>
        <input type="date" name="FechaDeRegistroProyecto" id="FechaDeRegistroProyecto"><br>
        <button type="submit">Registrar Proyecto</button>

    </form>

</body>
</html>