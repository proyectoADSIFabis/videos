<?php
$conexion = mysql_connect("localhost","fabiola","fabiola");
if (!$conexion){
die ("No he podido conectar por la siguiente razon: ".mysql_error());	
}
mysql_select_db("agenda",$conexion);
mysql_query("INSERT INTO miagendaa (Nombre,Apellido,Edad,Telefono)
VALUES('fabiola','Sanchez',18,'789048')");

mysql_query("INSERT INTO miagendaa (Nombre,Apellido,Edad,Telefono)
VALUES('lorena','Diaz',21,'854876')");

mysql_close($conexion);



?>