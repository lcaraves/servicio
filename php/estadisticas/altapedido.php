<?php 
	require_once '../conexion.php';

	//Inicialización de Variables.
	if (isset($_REQUEST['articulo_pedido'])) {
		$articulo_pedido = $_REQUEST['articulo_pedido'];
		} else {
		$articulo_pedido = '';
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

	if (isset($_REQUEST['fecha_salida_pedido'])) {
		$fecha_salida_pedido = $_REQUEST['fecha_salida_pedido'];
	} else {
		$fecha_salida_pedido = '';
	}

	if (isset($_REQUEST['nropresupuesto_pedido'])) {
		$nropresupuesto_pedido = $_REQUEST['nropresupuesto_pedido'];
	} else {
		$nropresupuesto_pedido = '';
	}

	$consulta = "INSERT INTO pedidoservicio (articulo_pedido, fecha_pedido, nropresupuesto_pedido, fecha_salida_pedido ,estado_pedido) 
					VALUES (
					'$articulo_pedido',
					'$fecha_pedido',
					'$nropresupuesto_pedido',
					'$fecha_salida_pedido',
					'$estado_pedido')";
	mysqli_query($conexion, $consulta) or die("Problemas: Consulta --> ALTA DE PEDIDO DE SERVICIO TECNICO".mysqli_error($conexion));
?>

	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>¡Bien hecho!</strong>
			<?php
				echo "Alta de Pedido de Servicio Realizada con Éxito!";
			?>
	</div>
			<?php
				mysqli_close($conexion);
	
			?>
