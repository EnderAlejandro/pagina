<?php

include("bd.php");

if(!empty($_GET["CodigoEstudiante"])){

$CodigoEstudiante=$_GET["CodigoEstudiante"];

$ConsultaDel="DELETE FROM estudiante WHERE estudiante.CodigoEstudiante = ".$CodigoEstudiante;

//echo $ConsultaDel;

$ResultadoDel=false;

try {                                         
$ResultadoDel= mysqli_query($Conexion, $ConsultaDel); 
         }

 catch (exception $e)
    { $Mensaje="No se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

 if($ResultadoDel == False) { $Mensaje="No se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;
           }
    //die($mysqli_error ($Conexion)); 
 else { $Mensaje="Se elimino el estudiante con codigo: ".$CodigoEstudiante;

  } // Fin del ciclo de listado de Proyectoses
    
  echo $Mensaje;
    
}

   





?>