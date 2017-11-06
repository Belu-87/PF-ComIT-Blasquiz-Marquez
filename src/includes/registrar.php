<?php
include 'conexion.php';

try
{
	if($_POST['funcion']==='RegistrarUsuario')
	{
		echo RegistrarUsuario();
	}
}
catch(mysqli_sql_exception $e)
{
	echo ($e);
}

function RegistrarUsuario(){
	global $conn;
	
	$user=$_POST["user"];
	$pass=$_POST["pass"];	
	$mail=$_POST["mail"];
	$fecha=$_POST["fechaNac"];

	$query="select * from usuario where email='$mail' and contrasenia=MD5('$pass')";
    $check = mysqli_query($conn,$query);
	$check = mysqli_num_rows($check);

	// $query="SELECT * from usuario where email=? and contrasenia=MD5(?)";
	// $query = $conn->prepare($query);
	// $query->bind_param( 'ss', $mail, $pass); 
	// // "ss' is a format string, each "s" means string
	// echo "$query";
	// $query->execute();

	if (empty($check)) 
	{ // if new user . Insert a new record		
		$query = "INSERT INTO usuario (alias,email,contrasenia,fechaNac) VALUES ('$user','$mail',MD5('$pass'),'$fecha')";
		
		if(mysqli_query($conn,$query))
		{
			echo "ok";		
		}
		else
		{
			echo "false";	
		}
		
	} 
	else {
		echo "false";
	}
}


?>
