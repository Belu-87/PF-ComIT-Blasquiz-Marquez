
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
						<a class="nav-link texto-color" href="Comprar"><img class="icono" src="../Imagenes/carrito.svg"></img></a>
					</li>
					<li class="nav-item separar">
						<a class="nav-link texto-color" href="https://www.facebook.com/people/Belu-Blas/100011323612501" target="_blank"><img class="icono" src="../Imagenes/face.svg"></img></a>
					</li>

					
					
					

        <!-- <li class="nav-item"><p class="navbar-text texto-color">¿Ya tienes una cuenta?</p></li> -->
        <li class="nav-item"><p class="navbar-text texto-color">
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
        <li class="nav-item dropdown">

        <?php if(isset($_SESSION["usuario"]))
			  {
			  echo "<a href='#' class='nav-link texto-color' id='CerrarSesion'><b>Cerrar Sesion</b> <span class='caret'></span></a>";
			  }
			  else
			  {echo "<a href='#' class='nav-link dropdown-toggle texto-color' data-toggle='dropdown'><b>Iniciar Sesion</b> <span class='caret'></span></a>";} 
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
									 <a href="#" class="btn btn-go"><i class="fa fa-gmail"></i> Google</a> -->
								</div>
                                o
								 <form class="form form-fondo" role="form" method="post" action="includes/login.php" accept-charset="UTF-8" id="login">
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
											 <button id ="submit" type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
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