<?php

include("bd.php");

$ConsultaP="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoP=false;

try {                                         
$ResultadoP= mysqli_query($Conexion, $ConsultaP); 
         }

 catch (exception $e)
    { $Mensaje="No se pudo consultar el proyecto";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $ResultadoE;
         }

 if($ResultadoP == False) { $Mensaje="No se pudo consultar el proyecto";
           }
    //die($mysqli_error ($Conexion)); 
 else {
   
    $RegistroP=$ResultadoP->fetch_assoc();
   // print_r($RegistroP);
    echo $RegistroP["NombreProyecto"];
      

    } // Fin del ciclo de listado de Proyectoses
  //  echo '</table>';
    
     

   





?>