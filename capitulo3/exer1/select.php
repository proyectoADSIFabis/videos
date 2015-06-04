<?php
//Relaizamos la conexion
$conexion = mysql_connect("localhost","fabiola","fabiola");
//Estructura de control por si falla
if (!$conexion) {
	die ("No he podido conectar porque: ".mysql_error());
    }
    //Seleccion de base de datos
    mysql_select_db("agenda",$conexion);
    //Realizo la peticion
    $peticion = mysql_query("SELECT * FROM miagendaa");
    //Listo los elementos de la base de datos
    while ($fila = mysql_fetch_array($peticion)) 
    {
     echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".
     $fila['Telefono'];
     echo "<br>";
    }
    //Cerrar la conexion
     mysql_close($conexion);



?>