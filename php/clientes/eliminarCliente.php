<?php 
	require_once '../conexion.php';

	$idCliente = $_REQUEST['idCliente'];
	$consulta = "DELETE FROM clientes WHERE idCliente = ".$idCliente;

	mysqli_query($conexion, $consulta) or die ("Error de consulta".mysql_error($conexion));
	echo "true";
	mysqli_close($conexion);
 ?>