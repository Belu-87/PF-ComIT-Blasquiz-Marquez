<?php 
include 'conexion.php';

$codigo=$_POST["codigo"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];

$url= $_SERVER['HTTP_REFERER'];

$porciones=explode("=", $url);
$idusuario= $porciones[1];

$query = "SET SQL_SAFE_UPDATES = 0; update usuario set contrasenia=md5('$pass') where md5(id)=$idusuario";

// $result = mysqli_query($conn,$query);
// $num_row = mysqli_num_rows($result);
// $row=mysqli_fetch_array($result);	



// if( $num_row >=1 ) { 
// $_SESSION['usuario']=$row['alias'];

// $_SESSION['id']=$row['id'];

// echo $_SESSION['usuario'];
// //header("location: http://localhost/PaginaDulzurasArtesanales/src/Productos.php");
// //echo 'ok';
// }
// else{
// echo 'false';
// }


?>