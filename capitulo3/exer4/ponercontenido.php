<?php

$conexion = new PDO('sqlite:bibliotecacd.db');

$consulta =
"INSERT INTO Discos VALUES ('Queeen','Queen',1973);
INSERT INTO Discos VALUES ('Queeen','QueenII',1974);
INSERT INTO Discos VALUES ('Queeen','Sheer Heat Attack',1974);
INSERT INTO Discos VALUES ('Queeen','A Night At The Opera',1975);
INSERT INTO Discos VALUES ('Queeen','U2','Boy',1980);
INSERT INTO Discos VALUES ('Queeen','U2','October'1981);
INSERT INTO Discos VALUES ('Queeen','U2','war'1983);
INSERT INTO Discos VALUES ('Queeen','U2','Under a Blood Red sky',1983);
)";

$resultado = $conexion-> exec($consulta);
$conexion= NULL;

?>
