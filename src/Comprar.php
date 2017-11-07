<!DOCTYPE HTML>
<html lang="es">

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include("libs.php");?>


	<link rel="stylesheet" href="https://rawgit.com/dbrekalo/fastselect/master/dist/fastselect.min.css">
	<script src="https://rawgit.com/dbrekalo/fastselect/master/dist/fastselect.standalone.min.js"></script>

    <link  rel="stylesheet" type="text/css" href="css/EstiloComprar.css" />
    <script src="javascript/comprar.js"></script>	

	<title>Comprar</title>

</head>

<body>
	<?php include("head.php");?>	

	<h1><p class="texto aparece"> Pedido</p></h1>

	<div class="container">
		<div class="row">
			<div class="table-responsive">
			  <table class="table aparece">
			    
			    <thead>
			    	<th>Producto</th>
			    	<th>Detalle</th>
					<th>Cantidad</th>
					<th>Precio Unitario</th>
					<th>Total</th>
					<th></th>
					<th></th>
			    </thead>

			    <tr class="aparece">
					<td>
						<select class="form-control">
							<option value="1">Producto 1</option>
							<option value="2">Producto 2</option>
							<option value="3">Producto 3</option>
							<option value="4">Producto 4</option>
						</select>
					</td>
					<td>
						<select class="multipleSelect form-control" multiple name="language" placeholder="opciones">
						    <option value="Bangladesh">Bangladesh</option>
						    <option value="Barbados">Barbados</option>
						    <option value="Belarus">Belarus</option>
						    <option value="Belgium">Belgium</option>
						</select>
					</td>					
					<td>
						<input class="form-control" type="number" id="new_country">
					</td>
					<td>						
						<div class="input-group">						
							<span class="input-group-addon">$</span>
							<input class="form-control" type="number" step="0.01" id="new_age">
						</div>
					</td>
					<td>
						<div class="input-group">						
							<span class="input-group-addon">$</span>
							<input class="form-control" type="number" step="0.01" id="new_age">
						</div>
					</td>	
					<td>
						<img class="imagen-fila aparece" src="../Imagenes/delete.png">
					</td>
					<!-- <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td> -->
					<td>
						<img class="imagen-fila aparece" src="../Imagenes/add.png">
					</td>
				</tr>

			  </table>
			</div>
		</div>
	</div>
	<!-- <img class="imagen aparece" src="../Imagenes/under_construction.png"> -->

</body>

<footer>

</footer>


</html>