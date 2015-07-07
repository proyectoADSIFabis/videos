<?php

session_start();
echo "tu usuario es: ".$_SESSION['usuario']."<br/>
tu contrasena es: ".$_SESSION['contrasena'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db') or die ('ha sido imposible establecer la conexion');
//establecer una consulta
$consulta="SELECT * FROM favoritos WHERE usuario='FABIOLA' AND
contrasena='fabiola';";
//ejecutar la consulta
$resultado = $conexion-> query($consulta);
//imprimir la consulta

echo "
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>
";



 foreach ($resultado as $fila) {
echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila
['comentario']."</td><td>".$fila['valoracion']."</td><td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."
&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>
Eliminar</a></td><td><a href='formularioactualizar.php?titulo=".$fila['titulo']."
&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>
Actualizar</a></td></tr>";
}
 //Añadir un registro

echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select name='categoria'>
     <option value='salud'>Salud</option>
     <option value='trabajo'>Trabajo</option>
     <option value='hobby'>Hobby</option>
     <option value='personal'>Personal</option>
     <option value='otros'>Otros</option>
 </td>
 <td><input type='text' name='comentario'></td>
 <td><input type='text' name='valoracion'></td>
 <td><input type='submit'></td>
 </tr>
 ";


echo "</table>";
//cerramos la conexion
$conexion=NULL;
?>
