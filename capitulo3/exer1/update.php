<?php
$conexion = mysql_connect("localhost","fabiola","fabiola");
mysql_select_db("agenda",$conexion);
mysql_query("UPDATE miagendaa SET Edad = '24' WHERE Nombre =
	'sandra' AND Apellido = 'sanchez'");

	mysql_close($conexion);


?>