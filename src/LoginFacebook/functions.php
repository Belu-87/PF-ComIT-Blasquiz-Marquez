<?php
include 'includes/conexion.php';
function checkuser($fuid,$ffname,$femail){
	global $conn;
	$query="select * from usuario where fUid='$fuid'";
    $check = mysqli_query($conn,$query);
	$check = mysqli_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO usuario (fUid,fFname,fEmail) VALUES ('$fuid','$ffname','$femail')";
	mysqli_query($conn,$query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE usuario SET fFname='$ffname', fEmail='$femail' where fUid='$fuid'";
	mysqli_query($conn,$query);
	}
}?>
