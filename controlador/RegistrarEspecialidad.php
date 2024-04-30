<?php
if (!empty($_POST["Codigo"])  && !empty($_POST["NombreEspecialidad"])) {
$CodigoEspecialidad = $_POST["CodigoEspecialidad"];
$NombreEspecialidad = $_POST["NombreEspecialidad"];


include("bd.php");
$Consulta="INSERT INTO especialidad (CodigoEspecialidad, NombreEspecialidad) VALUES ( '".$CodigoEspecialidad."', '".$NombreEspecialidad."')";
$Resultado=false;
                                            
try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 
         }

catch (exception $e)
    { $Mensaje="No se pudo registrar la especialidad por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
         }

if($Resultado == False) { $Mensaje="No se pudo registrar la especialidad";
           }
    //die($mysqli_error ($Conexion)); 
else {$Mensaje="El estudiante se registro correctamente"; }
                                                 

} 

else {
    $Mensaje= "<h3>El codigo y el nombre de la especialidad es obligatorio </h3>";
 }
echo $Mensaje;
?>
