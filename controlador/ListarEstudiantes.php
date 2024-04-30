<?php

include("bd.php");

$Consulta="select * from estudiante";

$Resultado=false;

try {                                         
$Resultado= mysqli_query($Conexion, $Consulta); 
         }

 catch (exception $e)
    { $Mensaje="No se pudo consultar el estudiante";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
         }

 if($Resultado == False) { $Mensaje="No se pudo consultar el estudiante";
           }
    //die($mysqli_error ($Conexion)); 
 else {
    echo '<table border="1">
    <tr>
        <td>Codigo Estudiante</td>
        <td>Primer Nombre</td>
        <td>Segundo Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Curso</td>
        <td>Codigo Especialidad</td>
        <td>Codigo Proyecto</td>
        <td>Fecha De Nacimiento</td>
        <td colspan="2">Acciones</td>
        
    </tr>';

    while($Registro=$Resultado->fetch_assoc()){
        echo'
    <tr>
        <td>'.$Registro["CodigoEstudiante"].'</td>
        <td>'.$Registro["PrimerNombre"].'</td>
        <td>'.$Registro["SegundoNombre"].'</td>
        <td>'.$Registro["PrimerApellido"].'</td>
        <td>'.$Registro["SegundoApellido"].'</td>
        <td>'.$Registro["Curso"].'</td>
        <td>';
        include("NombreEspecialidad.php"); 
        echo'</td>
        <td>';
        include("NombreProyecto.php"); 
        echo'</td>
        <td>'.$Registro["FechaDeNacimiento"].'</td>
        <td><a href="../vista/ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'" >Editar</a></td>
        <td><a href="Estudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">Eliminar</a></td>
    </tr>';


    } // Fin del ciclo de listado de Proyectoses
    echo '</table>';
    
     }

   





?>