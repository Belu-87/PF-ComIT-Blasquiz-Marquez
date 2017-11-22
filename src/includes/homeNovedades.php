<?php
include 'conexion.php';

	$funcion=$_POST['funcion'];
	if ($funcion==='novedadesMail') 
	{
		echo novedadesMail($conn);
	
	}



function novedadesMail($conn)
{	
	$mail=$_POST['email'];
	$query="insert into novedades (email) values('$mail')";
	$res=mysqli_query($conn,$query);

	echo "ok";

}


?>