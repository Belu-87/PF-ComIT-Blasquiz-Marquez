<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script data-require="tether@*" data-semver="1.4.0" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
    <link data-require="bootstrap@*" data-semver="4.0.5" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <script data-require="bootstrap@*" data-semver="4.0.5" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	
	<link  rel="stylesheet" type="text/css" href="css/EstiloLogin.css" />
	<link  rel="stylesheet" type="text/css" href="css/EstiloGeneral.css" />
	
	<title>Ingresar</title>
</head>

<body>

	<?php include("head.php");?>

	<div class="container col-sm-12">            	
            	<div class="form-box">
                	<div class="form-top">
                		<div class="text-center">
	              			<h3>Ingresa a nuestro sitio</h3>
                		</div>
                		<div class="form-top-right">
                			<i class="fa fa-key"></i>
                		</div>
                    </div>
                    <div class="form-bottom">
	                    <form role="form" action="" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Usuario</label>
	                        	<input type="text" name="form-username" placeholder="Usuario/email..." class="form-username form-control" id="form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Contraseña</label>
	                        	<input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
	                        </div>
	                        <button type="submit" class="btn">Ingresar</button>
	                    </form>
                    </div>

                    <div class="form-group">
						<div class="row">
							<div class="col-lg-10">
								<div class="text-center">
									<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
								</div>
							</div>
						</div>
					</div>
					<!-- ver bien como hacer para que vay a la pagina Registrar 
					<div class="row"> 
						<div class="col-md-24"><!-- ko if: svr.Am && !svr.aj 
						<div class="text-13 form-group no-margin-bottom" data-bind="css: { 'no-margin-bottom': !svr.Bn &amp;&amp; !svr.showCantAccessAccountLink },htmlWithBindings: html['WF_STR_SignUpLink_Text'], childBindings: { 'signup': { href: svr.g, css: { 'display-inline-block': true }, ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'], click: signup_onClick } }">¿No tiene una cuenta? <a href="https://signup.live.com/signup?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1507939016&amp;rver=6.7.6643.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&amp;id=292841&amp;cbcxt=out&amp;fl=wld&amp;contextid=3310C71A5FCBE307&amp;bk=1507939018&amp;uiflavor=web&amp;uaid=a62f7b7cda344eae8ea85896156c9515&amp;mkt=ES-US&amp;lc=21514" id="signup" class="display-inline-block" aria-label="Crear una cuenta Microsoft">Cree una.</a>
			            </div><!-- /ko --><!-- ko if: svr.Bn --><!-- /ko --><!-- ko if: svr.showCantAccessAccountLink --><!-- /ko 
			            </div> 
           			</div>
-->
                </div>
            
            	<div class="social-login text-center">
                	<h3>...o ingresa con:</h3>
                	<div class="social-login-buttons">
                    	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
                    		<i class="fa fa-facebook"></i> Facebook
                    	</a>
                    	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
                    		<i class="fa fa-twitter"></i> Twitter
                    	</a>
                    	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                    		<i class="fa fa-google-plus"></i> Google Plus
                    	</a>
                	</div>
                </div>
                
    </div>

</body>
</html>