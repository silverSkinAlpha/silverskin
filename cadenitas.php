<?php

function obtener_val($cadena){

	$First = "[";
	$Second = "]";
	$posFirst = strpos($cadena, $First); //Only return first match
	$posSecond = strpos($cadena, $Second); //Only return first match
	$valor = substr($cadena, $posFirst+1, $posSecond-$posFirst-1);
		
return $valor;

}

?>
