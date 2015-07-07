<?php
session_start();
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');

$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$valoracion =$_GET['edad'];

$consulta = "DELETE FROM usuarios WHERE usuario='".$usuario."' AND
contrasena='".$contrasena."' AND  nombre='".$nombre."' AND apellido='".
$apellido."' AND edad='".$edad."'";

$resultado = $conexion-> query($consulta);
$conexion = NULL;

echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=gestionarusuarios.php">
</head>
</html>
';

?>