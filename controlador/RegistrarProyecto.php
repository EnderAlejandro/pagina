<?php

if (!empty($_POST["Codigo"])  && !empty($_POST["NombreProyecto"]) && !empty($_POST["ResumenProyecto"]) && !empty($_POST["FechaDeRegistroProyecto"])) {
$CodigoProyecto = $_POST["CodigoProyecto"];
$NombreProyecto = $_POST["NombreProyecto"];
$ResumenProyecto = $_POST["Resumen"];
$FechaDeRegistroProyecto= $_POST["FechaRegistro"];


include("bd.php");
$Consulta="INSERT INTO proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ( '".$CodigoProyecto."', '".$NombreProyecto."', '".$ResumenProyecto."', '".$FechaDeRegistroProyecto."')";
$Resultado=false;
                                            
try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 
         }

catch (exception $e)
    { $Mensaje="No se pudo registrar el proyecto por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
         }

if($Resultado == False) { $Mensaje="No se pudo registrar el proyecto";
           }
    //die($mysqli_error ($Conexion)); 
else {$Mensaje="El proyecto se registro correctamente"; }
                                                 

} 

else {
    $Mensaje= "<h3>El codigo y el nombre del proyecto es obligatorio </h3>";
 }
echo $Mensaje;
?>