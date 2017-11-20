
<head>
<link rel="stylesheet" href="css/EstiloHead.css" />
<script type="text/javascript" src="javascript/login.js"> </script>
</head>    


<?php 
session_start();
// added in v4.0.0
require_once 'LoginFacebook/autoload.php';
require 'LoginFacebook/functions.php';
/*require 'functions.php';*/
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphLocation;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

// init app with app id and secret
FacebookSession::setDefaultApplication( '186507458586591','b64cc0238beb03a0aeb6826773cadfda' );
// login helper with redirect_uri
    //$helper = new FacebookRedirectLoginHelper('http://demos.krizna.com/test.php' );

    $helper = new FacebookRedirectLoginHelper('http://localhost:8081/PaginaDulzurasArtesanales/src/Home' );

try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  
  /*comentado pq no andaba*/
  $request = new FacebookRequest( $session, 'GET', '/me?locale=en_US&fields=id,name,email' );
  
  //$request = new FacebookRequest( $session, 'GET', '/me' );

  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
  $user = $response->getGraphObject(GraphUser::className());
  $loc = $response->getGraphObject(GraphLocation::className());

  $fbid = $graphObject->getProperty('id');   
  $fbuname = $graphObject->getProperty('name'); //username To Get Facebook ID
  $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
  $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
/* ---- Session Variables -----*/
  $_SESSION['FBID'] = $fbid;      
  $_SESSION['USERNAME'] = $fbuname;           
  $_SESSION['FULLNAME'] = $fbfullname;
  $_SESSION['EMAIL'] =  $femail;
  $_SESSION['usuario'] = $fbuname;   
  //echo '<pre>' . print_r( $user->getProperty('email'),1 ) . '</pre>';
  //echo '<pre>' . print_r( $graphObject, 1 ) . '</pre>';
/* ---- header location after session ----*/
   checkuser($fbid,$fbuname,$femail);
  //header("Location: index.php");
}

?>

<header>


     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
			<button aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarColor01" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> <a class="navbar-brand" href="Home"><img id="logo" src="../Imagenes/Logo.png"> </img></a>
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav ml-auto excedente">
					<li class="nav-item active">
						<a class="nav-link texto-color" href="Home">Inicio <span class="sr-only">(current)</span></a>
					</li>					
					<li class="nav-item">
						<a class="nav-link texto-color" href="AcercaDe">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link texto-color" href="Catalogo">Productos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link texto-color" href="Comprar"> 
							<svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 512 512">
	  							<path id="Comprar" fill="#B43325" d="M 418.91,415.58
		           					C 396.88,415.58 379.01,433.45 379.01,455.48 379.01,477.51 396.88,495.38 418.91,495.38 440.94,495.38 458.81,477.51 458.81,455.48
							          458.81,433.45 440.94,415.58 418.91,415.58 Z
							        M 179.53,415.58
							        C 157.50,415.58 139.64,433.45 139.64,455.48 139.64,477.51 157.50,495.38 179.53,495.38 201.57,495.38 219.43,477.51 219.43,455.48
							          219.43,433.45 201.57,415.58 179.53,415.58 Z
							        M 511.73,100.19
							        C 511.73,100.19 485.14,286.37 485.14,286.37 483.27,299.46 472.05,309.19 458.81,309.19 458.81,309.19 157.75,309.19 157.75,309.19
							          157.75,309.19 162.16,335.79 162.16,335.79 162.16,335.79 432.21,335.79 432.21,335.79 446.92,335.79 458.81,347.68 458.81,362.39
							          458.81,377.10 446.92,388.99 432.21,388.99 432.21,388.99 139.64,388.99 139.61,388.99 136.18,388.99 132.93,388.24 129.85,386.99
							          128.76,386.57 127.88,385.82 126.87,385.26 125.06,384.25 123.28,383.24 121.74,381.81 120.78,380.90 120.03,379.86 119.21,378.83
							          118.01,377.31 116.87,375.82 116.02,374.07 115.35,372.79 115.01,371.46 114.58,370.05 114.21,368.93 113.60,367.95 113.38,366.75
							          113.38,366.75 63.91,69.82 63.91,69.82 63.91,69.82 26.60,69.82 26.60,69.82 11.89,69.82 0.00,57.93 0.00,43.22 0.00,28.51 11.89,16.62 26.60,16.62 26.60,16.62 86.44,16.62 86.44,16.62 99.45,16.62 110.54,26.04 112.67,38.86 112.67,38.86 117.85,69.82 117.85,69.82 117.85,69.82 485.40,69.82 485.40,69.82 493.12,69.82 500.43,73.17 505.51,78.99 510.54,84.79 512.82,92.53 511.73,100.19 Z
							        M 352.42,123.01
							        C 352.42,123.01 352.42,176.21 352.42,176.21 352.42,176.21 447.16,176.21 447.16,176.21 447.16,176.21 454.74,123.01 454.74,123.01
							          454.74,123.01 352.42,123.01 352.42,123.01 Z
							        M 246.03,123.01
							        C 246.03,123.01 246.03,176.21 246.03,176.21 246.03,176.21 325.82,176.21 325.82,176.21 325.82,176.21 325.82,123.01 325.82,123.01
							          325.82,123.01 246.03,123.01 246.03,123.01 Z
							        M 325.82,202.81
							        C 325.82,202.81 246.03,202.81 246.03,202.81 246.03,202.81 246.03,256.00 246.03,256.00 246.03,256.00 325.82,256.00 325.82,256.00
							          325.82,256.00 325.82,202.81 325.82,202.81 325.82,202.81 325.82,202.81 325.82,202.81 Z
							        M 219.43,123.01
							        C 219.43,123.01 126.71,123.01 126.71,123.01 126.71,123.01 135.70,177.01 135.70,177.01 136.95,176.61 138.23,176.21 139.64,176.21
							          139.64,176.21 219.43,176.21 219.43,176.21 219.43,176.21 219.43,123.01 219.43,123.01 219.43,123.01 219.43,123.01 219.43,123.01 Z
							        M 148.87,256.00
							        C 148.87,256.00 219.43,256.00 219.43,256.00 219.43,256.00 219.43,202.81 219.43,202.81 219.43,202.81 140.01,202.81 140.01,202.81
							          140.01,202.81 148.87,256.00 148.87,256.00 Z
							        M 435.75,256.00
							        C 435.75,256.00 443.33,202.81 443.33,202.81 443.33,202.81 352.42,202.81 352.42,202.81 352.42,202.81 352.42,256.00 352.42,256.00
							        352.42,256.00 435.75,256.00 435.75,256.00 Z" />
							</svg>
						</a> 

						<!--<img class="icono" src="../Imagenes/carrito.svg"></img>-->
					</li>
					<li class="nav-item separar">
					    <a class="nav-link texto-color" href="https://www.facebook.com/people/Belu-Blas/100011323612501" target="_blank">
        					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
        					width="40px" height="40px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
							<path id="facebook" fill="#B43325" d="M17.252,11.106V8.65c0-0.922,0.611-1.138,1.041-1.138h2.643V3.459l-3.639-0.015 c-4.041,0-4.961,3.023-4.961,4.961v2.701H10v4.178h2.336v11.823h4.916V15.284h3.316l0.428-4.178H17.252z"/>
				
        					</svg>
      					</a>
						<!-- <a class="nav-link texto-color" href="https://www.facebook.com/people/Belu-Blas/100011323612501" target="_blank"><img class="icono" src="../Imagenes/face.svg"></img></a> -->
					</li>

					
					
					

        <!-- <li class="nav-item"><p class="navbar-text texto-color">¿Ya tienes una cuenta?</p></li> -->
        <li class="nav-item"><p class="navbar-text texto-color nombreUsuario">
	        <?php if(isset($_SESSION["usuario"]))
	        	  {
	        	  	echo $_SESSION["usuario"];
	        	  	
	        	  	// echo 
	        	  	// "<a href='#' class='nav-link dropdown-toggle texto-color' data-toggle='dropdown'> <span class='caret'></span></a>";
	        	  }
	        	  else
	        	  {echo "¿Ya tienes una cuenta?";
	        	  } ?>	
	        </p>
        </li>
        <li class="nav-item dropdown salir">

        <?php if(isset($_SESSION["usuario"]))
			  {
			  echo "<a href='#' class='nav-link texto-color' id='CerrarSesion'><b>Cerrar Sesion</b> <span class='caret'></span></a>";
			  }
			  else
			  {echo "<a href='#' class='nav-link dropdown-toggle texto-color iniciar' data-toggle='dropdown'><b>Iniciar Sesion</b> <span class='caret'></span></a>";} 
		?>	


<!--           <a href="#" class="nav-link dropdown-toggle texto-color" data-toggle="dropdown"><b>Iniciar Sesion</b> <span class="caret"></span></a> -->
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Iniciar sesion via
								<div class="social-buttons">
									<?php 
										echo '<a class="btn btn-fb" href="' . $helper->getLoginUrl() . '">Facebook</a>';
									?>
									<!-- <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
									 <a href="#" class="btn btn-go"><i class="fa fa-gmail"></i> Google</a> 
									method="post" action="javascript:LoginAjax();"-->
								</div>
                                o
								 <form class="form form-fondo" role="form"  accept-charset="UTF-8" id="login">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email</label>
											 <input type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
											 <input type="password" class="form-control" id="pass" placeholder="Contraseña" required>
                                             <div class="help-block text-right"><a href="RecuperarContrasenia"> ¿Olvidaste la contraseña?</a></div>
										</div>
										<div class="form-group">
											 <button id ="submit" type="submit" onclick="javascript:LoginAjax();" class="btn btn-primary btn-block">Iniciar sesión</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> Mantener la sesión iniciada
											 </label>
										</div>
										<label id="errorMessage"></label>
								 </form>
							</div>
							<div class="col-md-12 bottom text-center">
								¿Nuevo aqui? <a href="LoginRegistrar"><b>Registrate</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>

					
					
					
					
					
					
					
				</ul>


      


			</div>
		</nav>
		
</header>