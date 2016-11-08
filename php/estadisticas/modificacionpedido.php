<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idPedidoServicio = $_REQUEST['idPedidoServicio'];
	$articulo_pedido = $_REQUEST['articulo_pedido'];
	$nropresupuesto_pedido = trim($_REQUEST['nropresupuesto_pedido']);
	$estado_pedido = $_REQUEST['estado_pedido'];
	
	if (!empty($articulo_pedido)) {
		if (strlen($articulo_pedido)>40) {
			$errors[] = "</br> El <strong>Articulo</strong> debe ser menor que 40 caracteres. </br>";
		}
	}else{
			$errors[] = "</br> El campo <strong>Articulo</strong> esta vacio.";
	}


	if (empty($_REQUEST['fecha_salida_pedido'])) {
		$fecha_salida_pedido = '0000-00-00';
	}else{
		$fecha_salida_pedido = date('Y-m-d',strtotime($_REQUEST['fecha_salida_pedido']));
	}

	if (strlen($nropresupuesto_pedido) > 7) {
		$errors[] = "</br> El nro de presupuesto debe ser menor que 7. </br>";
	}

	//Control --> Validacion
	if (isset($errors)) {
		include_once '../validacion/mensajeError.php';	
	} else {
		$consulta = "UPDATE pedidoservicio SET 
					articulo_pedido ='".$articulo_pedido."', 
					nropresupuesto_pedido ='".$nropresupuesto_pedido."',
					estado_pedido ='".$estado_pedido."',
					fecha_salida_pedido ='".$fecha_salida_pedido."' 
					WHERE idPedidoServicio =".$idPedidoServicio;

	mysqli_query($conexion, $consulta) or die("Problema con la consulta de ACTUALIZACION de PEDIDO".mysql_error($consulta));	
	mysqli_close($conexion);
	?>
	<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
					<?php
						echo "La modificacion se realiza con total normalidad."; 
					?>
			</div>
<?php
	}
		
	?>
 