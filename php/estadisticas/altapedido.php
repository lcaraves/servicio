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

	$consulta = "INSERT INTO pedidoservicio (articulo_pedido, fecha_pedido, estado_pedido) 
					VALUES (
					'$articulo_pedido',
					'$fecha_pedido',
					'$estado_pedido')";
	mysqli_query($conexion, $consulta) or die("Problemas: Consulta --> ALTA DE PEDIDO DE SERVICIO TECNICO".mysqli_error($conexion));
	echo "El ALTA  de PEDIDO, se realizo correctamente.";
	mysqli_close($conexion);
?>