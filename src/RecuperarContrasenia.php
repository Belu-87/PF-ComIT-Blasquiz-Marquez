<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include("libs.php");?>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloRecuperar.css" />
	
	
	<title>Recuperar Contraseña</title>
</head>

<body>

	<?php include("head.php");?>

	<div class="form-box">
		<div class="form-top">
    		<div class="text-center">
    			<h3>Ingrese su correo</h3>
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="" method="post" class="registration-form">
				<div class="form-group">
                	<label class="">Email</label>
                	<input type="text" name="form-email" class="form-email form-control" id="form-email">
                </div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>		
                
            </form>
        </div>
	</div>

</body>

</html>