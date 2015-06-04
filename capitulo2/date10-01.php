<?php

function dameTiempo(){

	switch (date("l")) {
		case "Monday":
			$dia="Lunes";
			break;
		case "Tuesday":
			$dia="Martes";
			break;
		case "Wednesday":
			$dia="Miercoles";
			break;
		case "Thursday":
			$dia="Jueves";
			break;
		case "Friday":
			$dia="Viernes";
			break;
		case "saturday":
			$dia="Sabado";
			break;
		case "Sunday":
			$dia="Domingo";
			break;
		
	}
          switch (date("F")) {
          case "January":
          	$mes = "Enero";
          		break;
          case "February":
          	$mes = "febrero";
          		break;
          case "March":
          	$mes = "Marzo";
          		break;
          case "April":
          	$mes = "Abril";
          		break;
          case "May":
          	$mes = "Mayo";
          		break;
          case "June":
          	$mes = "Junio";
          		break;
          case "July":
          	$mes = "Julio";
          		break;
          case "August":
          	$mes = "Agosto";
          		break;
          case "September":
          	$mes = "Septiembre";
          		break;
          case "October":
          	$mes = "Octubre";
          		break;
          case "November":
          	$mes = "Noviembre";
          		break;
          case "December":
          	$mes = "Diciembre";
          		break;
          }

echo "Hoy es ".date("l")." , ".date("j")." de ".$mes." de ".date("Y");
}
dameTiempo();
	
	?>