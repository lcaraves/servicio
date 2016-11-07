<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idPedidoCliente = $_REQUEST['idPedidoCliente'];
	$producto_pedido = $_REQUEST['producto_pedido'];
	$fecha_pedido = $_REQUEST['fecha_pedido'];
	$nroserie_pedido = $_REQUEST['nroserie_pedido'];
	$precio_pedido = $_REQUEST['precio_pedido'];
	$confirmacion_pedido = $_REQUEST['confirmacion_pedido'];
	$senia_pedido = $_REQUEST['senia_pedido'];
	$fecha_confirmacion_pedido = $_REQUEST['fecha_confirmacion_pedido'];
	$observacion_pedido = $_REQUEST['observacion_pedido'];

	//Validacion de los campos
	//Producto Pedido
	if (!empty($producto_pedido)) {
		if (strlen($producto_pedido) > 60) {
		$errors[] = "</br>El Articulo debe ser menor que 60 caracteres.";
		}else {
			$producto_pedido = trim($producto_pedido);
		}
	} else {
		$errors[] = "</br>El Producto de Pedido, esta vacio.";
	}
	//Numero de Pedido
	if (isset($_REQUEST['nroserie_pedido'])) {
		if (strlen($_REQUEST['nroserie_pedido']) > 20) {
		$errors[] = "</br>El N° de Serie debe ser menor que 20 caracteres.";
		}else {
			$nroserie_pedido = trim($_REQUEST['nroserie_pedido']);
		}
	} else {
		$errors[] = "</br>El N° de Serie, esta vacio.";
	}
	// Observacion de Pedido
	if (!empty($_REQUEST['observacion_pedido'])) {
		if (strlen($_REQUEST['observacion_pedido']) > 100) {
		$errors[] = "</br>El nro de presupuesto debe ser menor que 100 caracteres.";
		}else {$observacion_pedido = trim($_REQUEST['observacion_pedido']);}
	} else {
		$observacion_pedido = 'Sin Observación';
	}

	if (isset($errors)) {
		include '../validacion/mensajeError.php';
	} else{
		$consulta = "UPDATE pedidocliente SET 
						productoPedido ='".$producto_pedido."', 
						fechaPedido ='".$fecha_pedido."', 
						numeroSerie ='".$nroserie_pedido."', 
						precio ='".$precio_pedido."', 
						confirmacion ='".$confirmacion_pedido."',
						senia ='".$senia_pedido."',
						fechaConfirmacion ='".$fecha_confirmacion_pedido."',
						observacion ='".$observacion_pedido."'
						WHERE idPedidoCliente =".$idPedidoCliente;

		mysqli_query($conexion, $consulta) or die("Problema con la consulta de Update Pedido de Clientes".mysql_error($consulta));
		mysqli_close($conexion);
		$msjs [] = "<br> Update de <strong>Pedido:</strong> ".$producto_pedido." se realizo con Éxito! </br>";
	}
	
	if (isset($msjs)) {
		include '../validacion/mensajeConfirmacion.php';
	}
				
	?>