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
    <link  rel="stylesheet" type="text/css" href="css/EstiloGeneral.css" />
    <script src="javascript/comprar.js"></script>	

	<title>Comprar</title>

</head>

<body>
	<?php include("head.php");?>	

	<h1><p class="texto aparece"> Pedido</p></h1>

	<div class="container">
		

		<div id="form1" class="container row">
			<div class="row fondo">
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
				    <tbody>
					    <tr id="1">
							<td>
								<select id="producto1" class="fstElement fstSingleMode fstNoneSelected form-control" name="uno" placeholder="opcion" searchPlaceholder="Buscar...">
									<?php 
										require 'includes/conexion.php';
										$query="select id, descripcion,precioUnitario from producto";
										$res=mysqli_query($conn,$query);
															
										mysqli_close($conn);	
										foreach ($res as $r) {
											echo "<option value='".$r['id']."' >".$r['descripcion']."</option>";									
										}  
									?>
								</select>
							</td>
							<td>
								<select id="detalle1" class="multipleSelect form-control" multiple name="language" placeholder="opciones">

									<?php 
										require 'includes/conexion.php';
										$query="SELECT id, descripcion FROM producto_detalle;";
										$res=mysqli_query($conn,$query);
															
										mysqli_close($conn);	
										foreach ($res as $r) {
											echo "<option value='".$r['id']."' >".$r['descripcion']."</option>";										
										}  
									?>
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
					</tbody>
					<tfoot>
						<tr>
							<td class="texto">Total Pedido:</td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="input-group">						
								<span class="input-group-addon">$</span>
								<input disabled="disabled" id="totalPedido" class="form-control" type="number" step="0.01">
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
					</tfoot>
				  </table>
				</div>
			</div>
		</div>


		<!-- <img class="imagen aparece" src="../Imagenes/under_construction.png"> -->

		<div id="form2" class="container row" style="display: none;right:250px;">
			
			<div class="container float-left panel1 fondo">
				<label class="texto">Resumen Pedido:</label>
				<br>
				<label>Cubanitos X 2u.---------------  $16<br>
					   Alfajores X 15u.--------------  $60<br>
				</label>
				<label class="texto">Total:----------  $76</label>
			</div>

			<div class="container float-right panel2 fondo">
				<label class="texto">Datos de Envio:</label>
				<form>
					<div class="form-group">
	                	<label class="">Calle(*)</label>
	                	<input type="text" name="calle" class="form-control" id="calle">
	                </div>
					<div class="form-group">
	                	<label class="">Altura(*)</label>
	                	<input type="text" name="altura" class="form-control" id="altura">
	                </div>         
	                <div class="form-group">
	                	<label class="">Telefono</label>
	                	<input type="text" name="telefono" class="form-control" id="telefono">
	                </div>                
				</form>
			</div>

		</div>
		
		<br><br>

		<div class="container row">
			<div class="col-12">
				<input type="button" style="display: none;" class="btn btn-outline-info float-left" value="Atras" id="back">

				<input type="button" class="btn btn-outline-info float-right" value="Siguiente" id="next">

				<input type="button" onclick="javascript:Validacion();" style="display: none;" class="btn btn-outline-info float-right" value="Confirmar Pedido" id="confirmar">
			</div>		
		</div>

		<br><br>

	</div>



</body>

<footer>
</footer>


</html>