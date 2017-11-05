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
            <form role="form" action="javascript:Validacion();" method="POST" class="registration-form">
				<div class= "form-group">
					<label class=""> Usuario </label>
					<input id="usuario" type="text" class="form-control" aria-describedby="sizing-addon2">
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
				</div>

                <div class="form-group">
                	<label class="">Email</label>
                	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2">@</span>
	                	<input id="mail" type="text" name="form-email" class="form-email form-control">
                	</div>
                </div>
				
				<div class="form-group">
                	<label class="">Contraseña</label>
                	<input id="password" type="password" name="form-password" class="form-password form-control">
                </div>
				
				<div class="form-group">
                	<label class="">Confirmar Contraseña</label>
                	<input id="confipassword" type="password" name="form-confipassword" class="form-confipassword form-control">
                </div>
				
				<div class="form-group">
					<label class="">Fecha de nacimiento</label>
					<input id="fechaNac" class="form-control fecha" type="date" value="2011-08-19">
                </div>			
			
				<div class="form-group">
					<button id="registrar" type="submit" class="btn btn-primary">Registrar</button>
				</div>		
                
            </form>
        </div>
	</div>

	<script src="javascript/registrar.js"></script>	
</body>


</html>