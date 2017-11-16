<?php
	require 'conexion.php';

	$funcion=$_POST['funcion'];
	if ($funcion==='CalcularPrecioUnit') 
	{
		echo CalcularPrecioUnit();
	}




function CalcularPrecioUnit()
{
	return 'hola';

}

?>