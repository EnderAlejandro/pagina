<?php
if (!empty($_POST["CodigoEstudiante"])  && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["CodigoEspecialidad"]) && !empty($_POST["CodigoProyecto"]) && !empty($_POST["Curso"])) {
$CodigoEstudiante = $_POST["CodigoEstudiante"];
$PrimerNombreEstudiante = $_POST["PrimerNombre"];
$SegundoNombreEstudiante = $_POST["SegundoNombre"];
$PrimerApellidoEstudiante = $_POST["PrimerApellido"];
$SegundoApellidoEstudiante = $_POST["SegundoApellido"];
$EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
$ProyectoEstudiante= $_POST["ProyectoEstudiante"];
$Curso = $_POST["Curso"];
$FechaDeNacimientoEstudiante = $_POST["FechaDeNacimiento"];


include("bd.php");
$Consulta="INSERT INTO estudiante (CodigoEstudiante, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, EspecialidadEstudiante, ProyectoEstudiante, Curso, FechaDeNacimiento) VALUES ( '".$CodigoEstudiante."', '".$PrimerNombreEstudiante."', '".$SegundoNombreEstudiante."', '".$PrimerApellidoEstudiante."', '".$SegundoApellidoEstudiante."', '".$EspecialidadEstudiante."', '".$ProyectoEstudiante."', '".$Curso."', '".$FechaDeNacimientoEstudiante."')";

//echo $Consulta;

$Resultado=false;

try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 

         }
 catch (exception $e)


    { $Mensaje="No se pudo registrar la especialidad por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

if($Resultado == False) { $Mensaje="No se pudo registrar la especialidad";
           
    //die($mysqli_error ($Conexion)); 
}
else {$Mensaje="El estudiante se registro correctamente";



 }
                                                 

    }

else {
    $Mensaje= "El codigo, primer nombre, primer apellido, curso, especialidad y proyecto son obligatorios";
 }
echo "<h3>".$Mensaje."</h3>";
?>

