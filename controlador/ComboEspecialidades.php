<?php
include("bd.php");

$ConsultaEsp="SELECT * FROM especialidad";

$ResultadoEsp=false;

try {                                         
$ResultadoEsp= mysqli_query($Conexion, $ConsultaEsp); 
         }

catch (exception $e)
    { $Mensaje="No se pudo registrar la especialidad por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

if($ResultadoEsp == False) { $Mensaje="No se pudo registrar la especialidad";
           }
    //die($mysqli_error ($Conexion)); 
else {
    echo '<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';

  while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
    if ($Registro["CodigoEspecialidad"]==$RegistroEsp["CodigoEspecialidad"]){
        echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'" selected>'.$RegistroEsp["NombreEspecialidad"].'</option>';


    }
        else {echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';}


    } // Fin del ciclo de listado de especialidades
    echo '</select>';
    
     }

    
    


 ?>