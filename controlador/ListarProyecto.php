<?php

include("bd.php");

$Consulta="select * from proyecto";

$Resultado=false;

try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 
         }

 catch (exception $e)
    { $Mensaje="No se pudo consultar los proyecto";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

 if($Resultado == False) { $Mensaje="No se pudo consultar los proyecto";
           }
    //die($mysqli_error ($Conexion)); 
 else {
    echo '<table border="1">
    <tr>
        <td>Codigo del proyecto</td>
        <td>Nombre del proyecto</td>
        <td>Resumen</td>
        <td>Fecha de registro</td>
        <td colspan="2">Acciones</td>
        
    </tr>';

    while($Registro=$Resultado->fetch_assoc()){
        echo'
    <tr>
        <td>'.$Registro["CodigoProyecto"].'</td>
        <td>'.$Registro["NombreProyecto"].'</td>
        <td>'.$Registro["Resumen"].'</td>
        <td>'.$Registro["FechaRegistro"].'</td>
        <td>Editar</td>
        <td>Eliminar</td>
        </tr>';


    } // Fin del ciclo de listado de Proyectoses
    echo '</table>';
    
     }

   





?>