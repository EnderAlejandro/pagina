<?php

include("bd.php");

$ConsultaE="select * from especialidad where CodigoEspecialidad='".$Registro["CodigoEspecialidad"]."'";

$ResultadoE=false;

try {                                         
$ResultadoE= mysqli_query($Conexion, $ConsultaE); 
         }

 catch (exception $e)
    { $Mensaje="No se pudo consultar la especialidad";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $ResultadoE;
         }

 if($ResultadoE == False) { $Mensaje="No se pudo consultar la especialidad";
           }
    //die($mysqli_error ($Conexion)); 
 else {

    $RegistroE=$ResultadoE->fetch_assoc();
    echo $RegistroE["NombreEspecialidad"];
      

    } // Fin del ciclo de listado de Proyectoses
   //echo '</table>';
    
     

   





?>