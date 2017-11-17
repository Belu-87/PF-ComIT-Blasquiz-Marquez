<?php
	require 'conexion.php';

	global $conn;

	$funcion=$_POST['funcion'];
	if ($funcion==='CalcularPrecioUnit') 
	{
		echo CalcularPrecioUnit();
	}
	else if($funcion==='ObtenerProductos')
	{
		echo ObtenerProductos($conn);
	}
	else if($funcion==='ObtenerDetalleProductos')
	{
		echo ObtenerDetalleProductos();
	}



function CalcularPrecioUnit()
{
	//return '';
	//return alert(  $('.fstSingleMode .fstSelected').val() );
}


function ObtenerProductos($conn)
{	
	$query="select id, descripcion,precioUnitario from producto";
	$res=mysqli_query($conn,$query);
					
	mysqli_close($conn);	

	$rows = array();
	while($r = mysqli_fetch_assoc($res)) {
	    $rows[] = $r;
	}
	return json_encode($rows);
}

function ObtenerDetalleProductos()
{
	return 'hola';
}

?>