<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script data-require="tether@*" data-semver="1.4.0" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
    <link data-require="bootstrap@*" data-semver="4.0.5" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <script data-require="bootstrap@*" data-semver="4.0.5" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloLogin.css" />
	<title>Ingresar</title>
</head>

<body>

	<?php include("head.php");?>
	<form>
		<br><br>
		<label> Nombre: </label>
		<input id="Nombre"></input>
		<br><br>
		<label> Apellido: </label>
		<input id="Apellido"></input>
		<br><br>
		<!-- fecha de nacimiento para promociones cumpleaños??
		 -->
		<label> Email: </label>
		<input id="mail"></input>
		<br><br>
		<label> Contraseña: </label>
		<input id="Password" type="password"></input>
		<br><br>
		<label> Confirmar contraseña: </label>
		<input id="ConfPassword" type="password"></input>
		<br><br>	
		<br><br>	
		<button class="Ingresar">	
		  <div class="text">Ingresar</div>
		  <div class="loader"></div>
		  <div class="done">SUCCESS</div>
		</button>
	</form>

</body>


</html>