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
			  <table id="tabla" class="table aparece">
			    
			    <thead>
			    	<th>Producto</th>
			    	<th>Detalle</th>
					<th>Cantidad</th>
					<th>Precio<br>Unitario</th>
					<th>Total</th>
					<th></th>
					<th></th>
			    </thead>
			    <tr id="fila1">
					<td>
						<select id="producto1" class="fstElement fstSingleMode fstNoneSelected form-control" name="uno" placeholder="opcion">
						    <option value="Bangladesh">Bangladesh</option>
						    <option value="Barbados">Barbados</option>
						    <option value="Belarus">Belarus</option>
						    <option value="Belgium">Belgium</option>
						</select>
					</td>
					<td>
						<select id="detalle1" class="multipleSelect form-control" multiple name="language" placeholder="opciones">
						    <option value="Bangladesh">Bangladesh</option>
						    <option value="Barbados">Barbados</option>
						    <option value="Belarus">Belarus</option>
						    <option value="Belgium">Belgium</option>
						</select>
					</td>					
					<td>
						<input class="form-control" type="number" step="1" id="cantidad1">
					</td>
					<td>						
						<div class="input-group">						
							<span class="input-group-addon">$</span>
							<input disabled="disabled" id="precioUnit1" class="form-control" type="number" step="0.01">
						</div>
					</td>
					<td>
						<div class="input-group">						
							<span class="input-group-addon">$</span>
							<input disabled="disabled" id="precioTotal1" class="form-control" type="number" step="0.01">
						</div>
					</td>	
					<td>
						<img id="eliminar" style="display: none;" class="imagen-fila eliminar aparece" src="../Imagenes/delete.png">
					</td>
					<!-- <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td> -->
					<td>
						<img id="agregar" class="imagen-fila agregar aparece" src="../Imagenes/add.png">
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