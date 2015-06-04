<?php
echo"<table
border=1><tr><td>Disco</td><td>Artista</td><td>Año</td></tr>";

$conexion = new PDO('sqlite:bibliotecacd.db');
$consulta = "SELECT * FROM Discos;";
$resultado = $conexion-> query($consulta);

foreach ( $resultado as $fila){
	echo "<tr><td>".$fila['Disco']."<tr><td>".$fila['Artista'].
	"<tr><td>".$fila['Anio']."<tr><td>";
     echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio'].
     "<br />";

}
echo "</table>";
$conexion= NULL;

?>