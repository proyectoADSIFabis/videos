<?php

$conexion=new PDO('sqlite:bibliotecacd.db') or die ('Ha sido
	imposible establecer la conexion');

$consulta ='


CREATE TABLE Discos(

Artista Char(20) Not Null,
Disco Char(40),
Anio Integer 
)';

$resultado = $conexion-> exec($consulta);

?>