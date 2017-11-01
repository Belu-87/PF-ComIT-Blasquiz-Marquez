<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include("libs.php");?>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloRegistrar.css" />
	
	
	<title>Nueva Contraseña</title>
</head>

<body>

	<?php include("head.php");?>

	<div class="form-box">
		<div class="form-top">
    		<div class="text-center">
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="" method="post" class="registration-form">
				<div class="form-group">
                	<label class="">Contraseña</label>
                	<input type="text" name="form-password" class="form-password form-control" id="form-password">
                </div>
				
				<div class="form-group">
                	<label class="">Confirmar Contraseña</label>
                	<input type="text" name="form-confipassword" class="form-confipassword form-control" id="form-confipassword">
                </div>	
				
				<div class="form-group">
					<button type="submit" class="btn">Confirmar</button>
				</div>		
                
            </form>
        </div>
	</div>


</body>

</html>