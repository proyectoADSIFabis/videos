<?php

session_start();
echo "tu usuario es: ".$_SESSION['usuario']."<br/>
tu contrasena es: ".$_SESSION['contrasena'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//establecer una consulta
$consulta="SELECT * FROM usuarios;";
//ejecutar la consulta
$resultado = $conexion-> query($consulta);
//imprimir la consulta

echo "
<table border=1 width=100%>
<tr>
<td>Usuario</td>
<td>Contrasena</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>
";



 foreach ($resultado as $fila) {
echo "<tr><td>".$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>".$fila['nombre']."</td><td>".$fila
['apellido']."</td><td>".$fila['edad']."</td><td><a href='eliminarusuario.php?usuario=".$fila['usuario']."
&contrasena=".$fila['contrasena']."nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>
Eliminar</a></td><td><a href='formularioactualizarusuario.php?usuario=".$fila['usuario']."
&contrasena=".$fila['contrasena']."nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>
Actualizar</a></td></tr>";
}
 //Añadir un registro

echo "
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contrasena'></td>
<td><input type='text' name='nombre'></td>

 </td>
 <td><input type='text' name='apellido'></td>
 <td><input type='text' name='edad'></td>
 <td><input type='submit'></td>
 </tr>
 ";


echo "</table>";
//cerramos la conexion
$conexion=NULL;
?>