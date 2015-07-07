<?php
session_start();

$_SESSION['usuario'] = "FABIOLA";
$_SESSION['contrasena'] = "fabiola";

echo'
<html>
   <head>
      <meta http-equiv="REFRESH"
       content="0; url=formulariologin.php">
       </head>
       </html>
       ';
?>