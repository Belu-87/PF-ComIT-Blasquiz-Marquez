<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include("libs.php");?>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloContraseniaNueva.css" />
	<link  rel="stylesheet" type="text/css" href="css/EstiloGeneral.css" />
	<script type="text/javascript" src="javascript/contraseniaNueva.js"> </script>
	
	<title>Nueva Contraseña</title>
</head>

<body>

	<?php include("head.php");?>

	<div class="form-box aparece">
		<h1></h1>
		<div class="form-top">
    		<div class="text-center">
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="javascript:CambioContrasenia();" method="post" class="registration-form">
				<div class="form-group">
                	<label class="">Codigo verificador</label>
                	<input type="text" name="form-password" class="form-password form-control" id="codigo">
                </div>
			
				<div class="form-group">
                	<label class="">Contraseña nueva</label>
                	<input type="password" name="form-password" class="form-password form-control" id="newpass">
                </div>
				
				<div class="form-group">
                	<label class="">Confirmar Contraseña</label>
                	<input type="password" name="form-confipassword" class="form-confipassword form-control" id="renewpass">
                </div>	
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" id="btnConfirmar">Confirmar</button>
				</div>		
                
            </form>
        </div>
	</div>


</body>

</html>