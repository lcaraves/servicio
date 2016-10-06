<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idPedidoServicio = $_REQUEST['idPedidoServicio'];
	$articulo_pedido = $_REQUEST['articulo_pedido'];
	$nropresupuesto_pedido = trim($_REQUEST['nropresupuesto_pedido']);
	$estado_pedido = $_REQUEST['estado_pedido'];
	

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
 