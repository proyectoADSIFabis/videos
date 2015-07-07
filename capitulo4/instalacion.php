<?php

//CREAR UNA TABLA DE FAVORITOS-------------------------------
//Conexion---------------------------------------------------
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Crear tabla------------------------------------------------
$consulta ='
CREATE TABLE favoritos(
 usuario Char (40) Not Null,
 contrasena Char (40) Not Null,
 titulo Char (40) Not Null,
 direccion Char (100) Not Null,
 categoria Char (40),
 comentario Char (200),
 valoracion Int

	)';
//Insertar contenido en la tabla-----------------------------
$resultado = $conexion-> query($consulta);
//Cerrar la conexion-----------------------------------------
$conexion= NULL;
//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS
//Establecer
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Preparar
$consulta = 
"INSERT INTO favoritos VALUES ('FABIOLA','fabiola','Google','http:/ /www.google.com','tecnologia','Es un gran buscador',10);
INSERT INTO favoritos VALUES ('FABIOLA','fabiola','Facebook','https:/ /www.facebook.com','tecnologia','Es una red social',10);

)";
//Insertar
$resultado = $conexion-> query($consulta);
//cerrar
$conexion=NULL;
//CREAR UNA TABLA DE USUARIOS-------------------------------
//Conexion---------------------------------------------------
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Crear tabla------------------------------------------------
$consulta ='
CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char (40) Not Null,
apellido Char (100) Not Null,
edad Char (40),
permisos Int 
)';

//Insertar contenido en la tabla-----------------------------
$resultado = $conexion-> query($consulta);
//cerrar la conexion-----------------------------------------
$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS
//Establecer
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Preparar
$consulta = 
"INSERT INTO usuarios VALUES ('FABIOLA','fabiola','fabiola Andrea','sanchez',18,1);

)";
//Insertar
$resultado = $conexion-> query($consulta);
//cerrar
$conexion=NULL;

//CREAR UNA TABLA DE LOGS------------------------------------
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Crear tabla------------------------------------------------
$consulta ='
CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char (50),
navegador Char (100),
usuario Char (40),
contrasena Char (40)

)';

//Insertar contenido en la tabla-----------------------------
$resultado = $conexion-> query($consulta);
//cerrar la conexion-----------------------------------------
$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA DE LOGS
//Establecer
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//Preparar
$consulta = 
"INSERT INTO logs VALUES (000000000,2015,06,05,09,10,03,'127.0.0.1','Chrome','FABIOLA','fabiola');

)";
//Insertar
$resultado = $conexion-> query($consulta);
//cerrar
$conexion=NULL;
?>