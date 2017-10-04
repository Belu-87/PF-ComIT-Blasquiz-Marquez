<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/EstiloProductos.css" />
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	
	
	<script data-require="jquery@*" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link data-require="bootstrap@*" data-semver="4.0.5" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <script data-require="bootstrap@*" data-semver="4.0.5" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	
	<title>Productos</title>

</head>
	
<body>
   <?php include("head.php");?>
  <div class="jumbotron text-center">
  	<h1>Productos</h1>
  </div>
  
  <div class="row">
    <div class="col-sm-4 text-center">
      <h3>Alfajores</h3>
	  <img class="img-rounded" src="../Imagenes/Alfajores.jpg"> </img>
      <p>Elaborados con maicena y rellenos de dulce de leche. tambien se pueden preparar de colores para cumpleaños.</p>
    
    </div>
    <div class="col-sm-4 text-center">
      <h3>Cubanitos</h3>
	  <!-- <img class="img-rounded" src="../Imagenes/Cubanitos.jpg">  </img> -->
	  
	  
	  
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="col-sm-12" src="../Imagenes/Cubanitos.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			  <img class="col-sm-12" src="../Imagenes/containerCubanitos.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			  <img class="col-sm-12" src="../Imagenes/IMG-20170723-WA0082.jpg" alt="Third slide">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	  
	  
	  
      <p>Elaborados con masa artesanal y multiples rellenos</p>
    </div>
    <div class="col-sm-4 text-center">
      <h3>Tarta de coco</h3>   
	  <img class="img-rounded" src="../Imagenes/Tarta de coco.jpg"> </img>	  
      <p>Deliciosa tarta de dimensiones de una pizza para matear.</p>
    </div>
  </div>
  
    <div class="row">
    <div class="col-sm-4 text-center">
      <h3>Cubanitorta</h3>
	  <img class="img-rounded" src="../Imagenes/Cubanitorta.jpg"> </img>
      <p>Torta de cubanitos con diseño personalizado para cumpleaños.</p>
    </div>
    <div class="col-sm-4 text-center">
      <h3>Muffins</h3>
	  <img class="img-rounded" src="../Imagenes/Muffins.jpg">  </img>
      <p>De masa muy esponjosa y divertidos toppings. Tambien pueden ser marmolados o de chocolate.</p>
    </div>
    <div class="col-sm-4 text-center">
      <h3>Chocotorta</h3>        
      <p>Texto de la columna 3 (esta abarca 4 de las 12 columnas totales)....</p>
      <p>No se olviden que el total de columnas son 12, pueden agruparlas como quieran: dos
      de 6 usando col-sm-6 en cada div, una de 12 para ocupar todo el año, 3 de 4, o incluso 12 columnas de 1</p>
    </div>
  </div>

</body>

<footer>

</footer>


</html>