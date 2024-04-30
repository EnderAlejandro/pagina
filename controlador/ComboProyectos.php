<?php
include("bd.php");

$ConsultaPro="SELECT * FROM proyecto";

$ResultadoPro=false;

try {                                         
$ResultadoPro= mysqli_query($Conexion, $ConsultaPro); 
         }

catch (exception $e)
    { $Mensaje="No se pudo consultar los proyecto";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
         }

if($ResultadoPro == False) { $Mensaje="No se pudo consultar los proyecto";
           }
    //die($mysqli_error ($Conexion)); 
else {
    echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';

    while($RegistroPro=$ResultadoPro->fetch_assoc()){
        if ($Registro["CodigoProyecto"]==$RegistroPro["CodigoProyecto"]){
            echo '<option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>';


        }
        else {echo '<option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>';}
       

    } // Fin del ciclo de listado de Proyectoses
    echo '</select>';
    
     }
    
    
    


 ?>