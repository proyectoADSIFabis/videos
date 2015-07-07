<?php
session_start();
//crear variables

$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//conexion

$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
 
//consulta
$consulta = 
"INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion');

)";
//Ejecuto
$resultado = $conexion-> exec ($consulta);
//cierro
$conexion = NULL;
//y vuelvo
echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>
';
?>