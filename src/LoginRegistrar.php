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

	<div class="form-box">
		<div class="form-top">
    		<div class="text-center">
    			<h3>Sign up now</h3>
        		<p>Fill in the form below to get instant access:</p>
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="" method="post" class="registration-form">
            	<div class="form-group">
            		<label class="sr-only" for="form-first-name">First name</label>
                	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-last-name">Last name</label>
                	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-email">Email</label>
                	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-about-yourself">About yourself</label>
                	<textarea name="form-about-yourself" placeholder="About yourself..." class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                </div>
                <button type="submit" class="btn">Sign me up!</button>
            </form>
        </div>
	</div>




<!-- 	<form>
		<br><br>
		<label> Nombre: </label>
		<input id="Nombre"></input>
		<br><br>
		<label> Apellido: </label>
		<input id="Apellido"></input>
		<br><br>
		fecha de nacimiento para promociones cumpleaños??
		
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
	</form> -->

</body>


</html>