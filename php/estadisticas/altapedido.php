<?php 
	require_once '../conexion.php';

	//Inicialización de Variables. Placa Red PCI 10/100 TF - 239
	if (!empty($_REQUEST['articulo_pedido'])) {
		if (strlen($_REQUEST['articulo_pedido']) > 80) {
		$errors[] = "</br>El Articulo debe ser menor que 80.";
		}else {
			$articulo_pedido = trim($_REQUEST['articulo_pedido']);
		}
	} else {
		$errors[] = "</br>El Articulo de Pedido, esta vacio.";
	}

	if (isset($_REQUEST['fecha_pedido'])) {
		$fecha_pedido = $_REQUEST['fecha_pedido'];
	} else {
		$fecha_pedido = '';
	}
	
	if (isset($_REQUEST['estado_pedido'])) {
		$estado_pedido = $_REQUEST['estado_pedido'];
	} else {
		$estado_pedido = '';
	}

	if (!empty(($_REQUEST['fecha_salida_pedido']))) {
		$fecha_salida_pedido = date('Y-m-d',strtotime($_REQUEST['fecha_salida_pedido']));
	} else {
		$fecha_salida_pedido = '0000-00-00';
	}

	if (!empty($_REQUEST['nropresupuesto_pedido'])) {
		if (strlen($_REQUEST['nropresupuesto_pedido']) > 7) {
		$errors[] = "</br>El nro de presupuesto debe ser menor que 7.";
		}else {$nropresupuesto_pedido = trim($_REQUEST['nropresupuesto_pedido']);}
	} else {
		$nropresupuesto_pedido = 'S-P';
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
			$consulta = "INSERT INTO pedidoservicio (articulo_pedido, fecha_pedido, nropresupuesto_pedido, fecha_salida_pedido ,estado_pedido) 
							VALUES (
							'$articulo_pedido',
							'$fecha_pedido',
							'$nropresupuesto_pedido',
							'$fecha_salida_pedido',
							'$estado_pedido')";
			mysqli_query($conexion, $consulta) or die("Problemas: Consulta --> ALTA DE PEDIDO DE SERVICIO TECNICO".mysqli_error($conexion));
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
		

	
	
