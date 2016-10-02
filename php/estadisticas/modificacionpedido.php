<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idPedidoServicio = $_REQUEST['idPedidoServicio'];
	$articulo_pedido = $_REQUEST['articulo_pedido'];
	$estado_pedido = $_REQUEST['estado_pedido'];

	$consulta = "UPDATE pedidoservicio SET 
					articulo_pedido ='".$articulo_pedido."', 
					estado_pedido='".$estado_pedido."' 
					WHERE idPedidoServicio =".$idPedidoServicio;

	mysqli_query($conexion, $consulta) or die("Problema con la consulta de ACTUALIZACION de PEDIDO".mysql_error($consulta));
	echo "Actualización realiza con total normalidad.";
	mysqli_close($conexion);	
 ?>