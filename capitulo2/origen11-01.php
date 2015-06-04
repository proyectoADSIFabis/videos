<?php

session_start();

$primeravariable = "Hola";
$_SESSION['segundavariable'] = "Adios";
 
 echo $primeravariable;
 echo "<a href='destino11-01.php'>Voy al destino</a>";

?>