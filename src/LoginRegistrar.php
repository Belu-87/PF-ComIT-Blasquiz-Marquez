<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include("libs.php");?>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloRegistrar.css" />
	
	
	<title>Registrar</title>
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
				<div class="input-group">
				  <span class="input-group-addon" id="sizing-addon2">@</span>
				  <input type="text" class="form-control" placeholder="Nombre de usuario" aria-describedby="sizing-addon2">
				</div>

                <div class="form-group">
                	<label class="sr-only">Email</label>
                	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                </div>
				
				<div class="form-group">
                	<label class="sr-only">Contraseña</label>
                	<input type="text" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                </div>
				
				<div class="form-group">
                	<label class="sr-only">Confirmar Contraseña</label>
                	<input type="text" name="form-confipassword" placeholder="Confirmar Contraseña..." class="form-confipassword form-control" id="form-confipassword">
                </div>
				
				<div class="form-group">
                	<label class="sr-only">Direccion</label>
                	<input type="text" name="form-Direccion" placeholder="Direccion..." class="form-Direccion form-control" id="form-Direccion">
                </div>
			

				<div class="form-group">
					<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                </div>			
			

				<label class="custom-control custom-radio">
				  <input id="radio1" name="radio" type="radio" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Femenino</span>
				</label>
				<label class="custom-control custom-radio">
				  <input id="radio2" name="radio" type="radio" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Masculino</span>
				</label>

			
				<div class="form-group">
					<button type="submit" class="btn">Registrar</button>
				</div>		
                
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