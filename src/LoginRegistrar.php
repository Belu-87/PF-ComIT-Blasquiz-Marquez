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
    			<h3>Registrate ahora</h3>
        		<p>Complete el siguiente formulario para obtener acceso instantáneo:</p>
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="" method="post" class="registration-form">
            	<div class="form-group">
            		<label class="sr-only" for="form-first-name">Nombre</label>
                	<input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-last-name">Apellido</label>
                	<input type="text" name="form-last-name" placeholder="Apellido..." class="form-last-name form-control" id="form-last-name">
                </div>

				<div class="input-group">
				  <span class="input-group-addon" id="sizing-addon2">@</span>
				  <input type="text" class="form-control" placeholder="Nombre de usuario" aria-describedby="sizing-addon2">
				</div>

                <div class="form-group">
                	<label class="sr-only" for="form-email">Email</label>
                	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                </div>
                <!-- sexo y fecha nacimiento
                ver si ponemos domicilio  -->

                <div class="form-group">
	               <div class="form-check">
		  				<label class="form-check-label">
		    			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
		    			Femenino
		  				</label>
					</div>
					<div class="form-check">
					  	<label class="form-check-label">
					    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					    Masculino
					  	</label>
					</div>
					</div>



                	
                </div>



<!--                 <div class="form-group">
                	<label class="sr-only" for="form-about-yourself">About yourself</label>
                	<textarea name="form-about-yourself" placeholder="About yourself..." class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                </div> -->
                <button type="submit" class="btn">Registrar</button>
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