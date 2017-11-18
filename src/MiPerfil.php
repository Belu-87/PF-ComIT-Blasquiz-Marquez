<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include("libs.php");?>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloRegistrar.css" />
	<link  rel="stylesheet" type="text/css" href="css/EstiloGeneral.css" />
	
	<title>Mis datos</title>
</head>

<body>

	<?php include("head.php");?>



	<div class="form-box aparece">
		<h1> Mis datos </h1>

		<div class="form-top">
    		<div class="text-center">

    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">

        <!-- cambiar registrar x traer los datos de la base -->

        
            <form role="form" action="javascript:Validacion();" method="POST" class="registration-form" id="formulario">
				<div class= "form-group">
					<label class=""> Nombre </label>
					<input id="Nombre" type="text" class="form-control campo" aria-describedby="sizing-addon2">
				</div>
				
				<div class= "form-group">
					<label class=""> Apellido </label>
					<input id="Nombre" type="text" class="form-control campo" aria-describedby="sizing-addon2">
				</div>

                <div class="form-group">
                	<label class="">Email</label>
                	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2">@</span>
	                	<input id="mail" type="text" name="form-email" class="form-email form-control campo">
                	</div>
                </div>				
				
				<div class="form-group">
					<label class="">Fecha de nacimiento</label>
					<input id="fechaNac" class="form-control fecha campo" type="date" value="2011-08-19">
                </div>			
							
				<div class="form-check">
					<label class="form-check-label"></label>
					<input id="cambiarPass" class="form-check-input" type="checkbox">
					Quiero cambiar mi contraseña
                </div>		


				<div class="form-group">
					<button id="registrar" type="submit" class="btn btn-primary">Modificar</button>
				</div>		
                
            </form>
        </div>
	</div>

	<script src="javascript/registrar.js"></script>	
</body>


</html>