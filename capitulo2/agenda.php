<?php

$agenda[0]['nombre'] = "fabiola";
$agenda[0]['telefono'] = 3152034075;
$agenda[0]['email'] = "fabiolis96san12@gmail.com";


$agenda[1]['nombre'] = "sandra";
$agenda[1]['telefono'] = 123455678;
$agenda[1]['email'] = "samih47@hotmail.com";

$agenda[2]['nombre'] = "lorena";
$agenda[2]['telefono'] = 3456784;
$agenda[2]['email'] = "lorei766@yahoo.es";

$agenda[3]['nombre'] = "fabiola";
$agenda[3]['telefono'] = 3152034075;
$agenda[3]['email'] = "fabiolis96san12@gmail.com";


$agenda[4]['nombre'] = "sandra";
$agenda[4]['telefono'] = 123455678;
$agenda[4]['email'] = "samih47@hotmail.com";

$agenda[5]['nombre'] = "lorena";
$agenda[5]['telefono'] = 3456784;
$agenda[5]['email'] = "lorei766@yahoo.es";


echo $agenda[2]['nombre'];
function dameAgenda(){
for ($indice=0; $indice <=5 ; $indice++) { 
	echo'
<table border=1 width=300px>
<tr>
   <td>
      Nombre:
      </td>
      <td>'.$agenda[$indice]['nombre'].'
      </td>
      </tr>
     <tr> 
         <td>
            telefono:
            </td>
            <td>'.$agenda[$indice]['telefono'].'
            </td>
            </tr>
            <tr> 
         <td>
            email:
            </td>
            <td>'.$agenda[$indice]['email'].'
            </td>
            </tr>
            </table>
            ';
}
}
dameAgenda();
?>