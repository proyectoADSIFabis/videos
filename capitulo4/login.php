<?php
session_start();

//Obtener variables
$usuario= $_POST['usuario'];
$contrasena=$_POST['contrasena'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');

//consulta
$consulta="SELECT * FROM usuarios;";
//lanzar consulta
$resultado = $conexion-> query($consulta);
//repasar los resultados
foreach ($resultado as $fila) {

	$usuariobasedatos=$fila['usuario'];
	$contrasenabasedatos=$fila['contrasena'];

	if($usuario == $usuariobasedatos & 
	$contrasena == $contrasenabasedatos){
	// si el resultado es positivo entonces asignar
    $_SESSION['usuario']= $usuario;
    $_SESSION['contrasena']= $contrasena;

    echo'
    html>
   <head>
      <meta http-equiv="REFRESH"
       content="0; url= "principal.php">
       </head>
       </html>
       ';

     }else{
     	//si el resultado es negativo entonces nada
     }  
	}
    //cerramos base de datos
?>
