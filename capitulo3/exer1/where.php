<?php

$conexion = mysql_connect("localhost","fabiola","fabiola");

if (!$conexion) {
	die (mysql_error());
}

mysql_select_db("agenda",$conexion);

$peticion = mysql_query("SELECT * FROM miagendaa WHERE
Nombre='Lorena'");

while ($fila = mysql_fetch_array($peticion)) 
{

echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".
$fila['Telefono'];
echo "<br>";
}
mysql_close($conexion);



?>