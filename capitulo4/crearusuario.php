<?php
//obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
 //consulta
/*privilegios son:
1=administrador
2=controlador
3=usuario registrado
4=usuario invitado
*/
$consulta=

"INSERT INTO usuarios VAlUES
('$usuario','$contrasena','$nombre','$apellido','$edad',3)

)";
//ejecutar
$resultado = $conexion-> exec ($consulta);
//cerrar
$conexion=NULL;
echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=gestionarusuarios.php">
</head>
</html>
';

?>