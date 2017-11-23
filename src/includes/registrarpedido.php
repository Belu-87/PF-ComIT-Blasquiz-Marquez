<?php
	require 'conexion.php';
	session_start();

	global $conn;

	$funcion=$_POST['funcion'];
	if ($funcion==='CalcularPrecioUnit') 
	{
		echo CalcularPrecioUnit();
	}
	else if($funcion==='ObtenerProductos')
	{
		echo ObtenerProductos($conn);
	}
	else if($funcion==='ObtenerDetalleProductos')
	{	
		echo ObtenerDetalleProductos($conn);
	}
	else if($funcion==='RegistrarPedido')
	{
		if( !isset($_SESSION["usuario"]) )
		{
			echo "registrarse";	
		}	
		else
		{
			echo RegistrarPedido($conn);			
		}

	}	



function CalcularPrecioUnit()
{
	//return '';
	//return alert(  $('.fstSingleMode .fstSelected').val() );
}


function ObtenerProductos($conn)
{	
	$query="select id, descripcion,precioUnitario from producto";
	$res=mysqli_query($conn,$query);
					
	mysqli_close($conn);	

	$rows = array();
	while($r = mysqli_fetch_assoc($res)) {
	    $rows[] = $r;
	}
	return json_encode($rows);
}

function ObtenerDetalleProductos($conn)
{
	$query2="select id, descripcion,suma from producto_detalle";

	$res2=mysqli_query($conn,$query2);

	mysqli_close($conn);	

	$rows2 = array();
	while($r2 = mysqli_fetch_assoc($res2)) {
	    $rows2[] = $r2;
	}
	return json_encode($rows2);
}


function RegistrarPedido($conn)
{
	try
	{
		$prueba="";
		$conn->begin_transaction();
		/* Desactivar la autoconsigna */
		$conn->autocommit(FALSE);

		$datos=$_POST['datos'];
		$total=$_POST['total'];
		$calle=$_POST['calle'];
		$altura=$_POST['altura'];
		$telefono=$_POST['telefono'];

		$obj=json_decode($datos);

		/****registro direccion nueva****/
		$idDire=getMaxIdFromTable($conn,"direccion")+1;

		if( isset($_SESSION['id'])  )
		{
			$idUser=$_SESSION['id'];	
		}
		else
		{
			$idUser=getIdFromFbId($conn,$_SESSION['FBID']);
			//$idUser=$_SESSION['FBID'];
		}

		$queryDire="insert into direccion(id,calle,numero,idUsuario)values($idDire,'$calle','$altura',$idUser);";
		$conn->query($queryDire);
		$prueba.=$queryDire;
		//	echo "$queryDire";
		/*******************************/


		/****registro envio****/
		$idEnvio=getMaxIdFromTable($conn,"envio")+1;
		$queryEnvio="insert into envio(id,detalle,idDireccion,importe,fecha,idFormaDePago)values($idEnvio,'',$idDire,0.0,null,1);";
		$conn->query($queryEnvio);
		$prueba.=$queryEnvio;
		//	echo "$queryEnvio";
		/*******************************/

		/****registro pedido****/
		$idPedido=getMaxIdFromTable($conn,"pedido")+1;
		$queryPedido="insert into pedido(id,numero,fecha,idUsuario,idEnvio,total,idFormaDePago)values($idPedido,$idPedido,CURDATE(),$idUser,$idEnvio,$total,1);";
		$conn->query($queryPedido);
		$prueba.=$queryPedido;
		//echo "$queryPedido";
		/*******************************/

		/****registro tracking****/
		$idTracking=getMaxIdFromTable($conn,"tracking_pedido")+1;
		$queryTracking="insert into tracking_pedido(id,fecha,idPedido,idEstadoPedido)values($idTracking,CURDATE(),$idPedido,1);";
		$conn->query($queryTracking);
		$prueba.=$queryTracking;
		//echo "$queryTracking";
		/*******************************/	


		/***ids a ciclar segun cant filas***/
		$idItemPedido=getMaxIdFromTable($conn,"item_pedido")+1;
		$idItemDetalle=getMaxIdFromTable($conn,"item_detalle")+1;
		$idPedidoDetalle=getMaxIdFromTable($conn,"pedido_detalle")+1;
		/***********************************/
		foreach ($obj as $item) 
		{
			/****registro item pedido****/
			$prodId=$item->id;
			$queryItemPedido="insert into item_pedido(id,idPedidoProducto)values($idItemPedido,$prodId);";
			$conn->query($queryItemPedido);
			$prueba.=$queryItemPedido;
			//echo "$queryItemPedido";
			/*******************************/	

			foreach ($item->detalle as $det) 
			{
				 //echo $det;	
				/****registro item detalle****/
				$prodId=$item->id;
				$queryItemDetalle="insert into item_detalle(id,item_pedido,producto_detalle)values($idItemDetalle,$idItemPedido,$det);";
				$conn->query($queryItemDetalle);
				$prueba.=$queryItemDetalle;
				$idItemDetalle+=1;			
				//echo "$queryItemDetalle";
				/*******************************/
			}

			/****registro pedido_detalle****/
			$cant=$item->cantidad;
			$pu=$item->precioUnitario;
			$pt=$item->precioTotal;
			$queryPedidoDetalle="insert into pedido_detalle(id,idPedido,idItemPedido,cantidad,precioUnitario,precioTotal)values($idPedidoDetalle,$idPedido,$idItemPedido,$cant,$pu,$pt);";
			//echo "$queryPedidoDetalle";
			$conn->query($queryPedidoDetalle);
			$prueba.=$queryPedidoDetalle;
			$idPedidoDetalle+=1;						
			/******************************/		

			/*seguir con tabla pedido_detalle*/

			$idItemPedido+=1;
		}

		$conn->commit();
		$conn->close();
		echo "$prueba";		
	}
	catch(Exception $e)
	{
		mysqli_rollback();
		echo "error";
		echo $e->getMessage();
	}

}



function getMaxIdFromTable($conn,$table)
{
	$query="select ifnull(max(id),0)as num from $table";

	$res=mysqli_fetch_assoc( mysqli_query($conn,$query));
	//$row = mysql_fetch_array($res);
	//mysqli_close($conn);		

	return (int)$res["num"];
}


function getIdFromFbId($conn,$fbID)
{
	$query="select id from usuario where fuid=$fbID";

	$res=mysqli_fetch_assoc( mysqli_query($conn,$query));
	//$row = mysql_fetch_array($res);
	//mysqli_close($conn);		

	return (int)$res["id"];
}
?>