<?php

$archivo = "text.txt";
$contenido = "Este es mi otro contenido";
$manejador = fopen($archivo,'w+');
fwrite($manejador,$contenido);
?>