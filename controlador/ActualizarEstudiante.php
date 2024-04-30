<?php
include("bd.php");

if (!empty($_GET["CodigoEstudiante"])){
    $Consulta = "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
    }
else if (!empty($_POST["CodigoEstudiante"])  && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["CodigoEspecialidad"]) && !empty($_POST["CodigoProyecto"]) && !empty($_POST["Curso"])) {
        $CodigoEstudiante = $_POST["CodigoEstudiante"];
        $PrimerNombreEstudiante = $_POST["PrimerNombre"];
        $SegundoNombreEstudiante = $_POST["SegundoNombre"];
        $PrimerApellidoEstudiante = $_POST["PrimerApellido"];
        $SegundoApellidoEstudiante = $_POST["SegundoApellido"];
        $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
        $ProyectoEstudiante= $_POST["ProyectoEstudiante"];
        $Curso = $_POST["Curso"];
        $FechaDeNacimientoEstudiante = $_POST["FechaDeNacimiento"];
        
        
        $Consulta="UPDATE estudiante SET CodigoEstudiante = '".$CodigoEstudiante."', PrimerNombre = '".$PrimerNombreEstudiante."', SegundoNombre = '".$SegundoNombreEstudiante."', PrimerAppellido = '".$PrimerApellidoEstudiante."', Segundo Appellido = '".$SegundoApellidoEstudiante."', EspecialidadEstudiante = '".$EspecialidadEstudiante."', ProyectoEstudiante = '".$ProyectoEstudiante."', Curso = '".$Curso."', FechaDeNacimiento = '".$FechaDeNacimientoEstudiante."' WHERE estudiante.CodigoEstudiante= ".$_POST["CodigoActual"];
        
        }
        
       
        else {
            $Mensaje= "<h3>El codigo, primer nombre, primer apellido, curso, especialidad y proyecto son obligatorios </h3>";
         }
            


        echo $Consulta;
        
        $Resultado=false;

try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 

    }
 catch (exception $e)


    { $Mensaje="No se pudo consultar el estudiante por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

if($Resultado == False) {$Mensaje="No se pudo consultar el estudiante " .$_GET["CodigoEstudiante"];}

    //die($mysqli_error ($Conexion)); 
else {$Mensaje="El estudiante se actualizo correctamente".$_GET["CodigoEstudiante"];
    //echo $Consulta;

    $Registro=$Resultado->fetch_assoc();

    header('Location: Estudiantes.php');
}
    

echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];
  



?>

