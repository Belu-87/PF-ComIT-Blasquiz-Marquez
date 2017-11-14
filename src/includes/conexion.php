<?php 
$servername = "localhost";
$username = "root";
$password = "admin";
$db="dulzuras_artesanales";
//crear conexion
$conn = mysqli_connect($servername,$username, $password,$db);

//chequear conexion
if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}
?>