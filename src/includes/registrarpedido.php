<?php
	require 'conexion.php';
	session_start();

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
		echo ObtenerDetalleProductos($conn);
	}
	else if($funcion==='RegistrarPedido')
	{
		if( !isset($_SESSION["usuario"]) )
		{
			echo "registrarse";	
		}	
		else
		{
			echo RegistrarPedido($conn);			
		}

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

function ObtenerDetalleProductos($conn)
{
	$query2="select id, descripcion,suma from producto_detalle";

	$res2=mysqli_query($conn,$query2);

	mysqli_close($conn);	

	$rows2 = array();
	while($r2 = mysqli_fetch_assoc($res2)) {
	    $rows2[] = $r2;
	}
	return json_encode($rows2);
}


function RegistrarPedido($conn)
{
	echo "string";
}


?>