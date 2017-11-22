<?php 
include 'conexion.php';

$codigo=$_POST["codigo"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];

$url= $_SERVER['HTTP_REFERER'];

$porciones=explode("=", $url);
$idusuario= $porciones[1];

if(EsCodigoValido($codigo))
{
	$query = "SET SQL_SAFE_UPDATES = 0; update usuario set contrasenia=md5('$pass') where md5(id)='$idusuario'";

	$resultado = mysqli_multi_query($conn,$query);

	echo "ok";
}
else
{
	echo "digito verificador";
}



function EsCodigoValido($num){
  if ( ($num % 6 ==0) and ($num % 4 ==0) ) {
    return true;
  }
  else
  {
    return false;
  }
}


?>