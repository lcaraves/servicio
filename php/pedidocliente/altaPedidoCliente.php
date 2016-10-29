<?php 
	require_once '../conexion.php';

	//Inicialización de Variables. Placa Red PCI 10/100 TF - 239
	if (!empty($_REQUEST['producto_pedido'])) {
		if (strlen($_REQUEST['producto_pedido']) > 60) {
		$errors[] = "</br>El Articulo debe ser menor que 60 caracteres.";
		}else {
			$producto_pedido = trim($_REQUEST['producto_pedido']);
		}
	} else {
		$errors[] = "</br>El Producto de Pedido, esta vacio.";
	}

	if (isset($_REQUEST['fecha_pedido'])) {
		$fecha_pedido = date('Y-m-d',strtotime($_REQUEST['fecha_pedido']));
	} else {
		$fecha_pedido = '';
	}
	
	if (isset($_REQUEST['nroserie_pedido'])) {
		if (strlen($_REQUEST['nroserie_pedido']) > 20) {
		$errors[] = "</br>El N° de Serie debe ser menor que 20 caracteres.";
		}else {
			$nroserie_pedido = trim($_REQUEST['nroserie_pedido']);
		}
	} else {
		$errors[] = "</br>El N° de Serie, esta vacio.";
	}
	//Precio --> Pedido
	if (!empty($_REQUEST['precio_pedido'])) {
		if (strlen($_REQUEST['precio_pedido']) > 10) {
		$errors[] = "</br>El Precio debe ser menor que 10 caracteres.";
		}else {$precio_pedido = trim($_REQUEST['precio_pedido']);}
	} else {
		$precio_pedido = 'Sin Precio';
	}

	if (!empty(($_REQUEST['fecha_confirmacion_pedido']))) {
		$fecha_confirmacion_pedido = date('Y-m-d',strtotime($_REQUEST['fecha_confirmacion_pedido']));
	} else {
		$fecha_confirmacion_pedido = '0000-00-00';
	}

	if (!empty($_REQUEST['observacion_pedido'])) {
		if (strlen($_REQUEST['observacion_pedido']) > 100) {
		$errors[] = "</br>El nro de presupuesto debe ser menor que 100 caracteres.";
		}else {$observacion_pedido = trim($_REQUEST['observacion_pedido']);}
	} else {
		$observacion_pedido = 'Sin Observación';
	}


	if (isset($errors)) {
	?>	
			<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong> Error!!</strong> 
				<?php
					foreach ($errors as $error) {
						echo $error;
					}
				?>
			</div>
		<?php	
		} else {
			$consulta = "INSERT INTO pedidocliente (productoPedido, fechaPedido, numeroserie, precio, confirmacion, fechaConfirmacion , observacion, idCliente) 
							VALUES (
							'$producto_pedido',
							'$fecha_pedido',
							'$nroserie_pedido',
							'$precio_pedido',
							'$_REQUEST[confirmacion_pedido]',
							'$fecha_confirmacion_pedido',
							'$observacion_pedido',
							'$_REQUEST[idCliente]')";
			mysqli_query($conexion, $consulta) or die("Problemas: Consulta --> ALTA DE PEDIDO DE CLIENTE".mysqli_error($conexion));
			mysqli_close($conexion);
			$msjs [] = "<br> Alta de <strong>Pedido</strong> realizada con Éxito! </br>";
		}

	if (isset($msjs)) {
		?>
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
					<?php
						foreach ($msjs as $msj) {
						echo $msj;
					}
					?>
			</div>
	<?php } ?>