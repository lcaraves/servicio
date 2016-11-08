<?php 
require_once '../conexion.php';

$consultaUpdate = "UPDATE productos set estado = 2 WHERE idProducto ='$_REQUEST[idProducto]'";
mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));

//Campo Trabajo
if (isset($_REQUEST['trabajoRealizado'])) {
	if (!empty($_REQUEST['trabajoRealizado'])) {
		if (strlen($_REQUEST['trabajoRealizado']) > 90) {
			$errors [] = "</br> El campo <strong>Trabajo Realizado</strong>, es mayor que 90 caracteres.";
		}else{
			$trabajoRealizado = $_REQUEST['trabajoRealizado'];
		}
		
	}else{
		$errors [] = "</br> El campo <strong>Trabajo Realizado</strong>, es vacío.";
	}
}else{
	$trabajoRealizado = '';
}
//Campo de Producto
if (!empty($_REQUEST['cambioProducto']) OR !empty($_REQUEST['otrosProductos'])) {
		$cambioProdusctos = $_REQUEST['cambioProducto'] ." ". $_REQUEST['otrosProductos'];	
	} else {
		$cambioProdusctos = 'No hubo ningun cambio.';
	}
//Campo Observaciones
if (isset($_REQUEST['observaciones'])) {
	if (strlen($_REQUEST['observaciones'])>100) {
		$errors [] = "</br> El campo <strong>observaciones</strong>, es mayor que 100 caracteres.";
		}else{
			$observaciones = $_REQUEST ['observaciones'];
		}
}else {
	$observaciones = '';
}

//---------------
//Control Errores
if (isset($errors)) {
	include_once '../validacion/mensajeError.php';
}else{
	$consulta = "INSERT INTO trabajos (idProducto, trabajoRealizado, cambioProducto, observaciones, garantia, presupuesto) 
					VALUES (
					'$_REQUEST[idProducto]',
					'$trabajoRealizado',
					'$cambioProdusctos',
					'$observaciones',
					'$_REQUEST[garantia]',
					'$_REQUEST[presupuesto]')";
	mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert trabajos Nuevos".mysqli_error($conexion));
	$msjs [] = "</br> Alta de <strong>Trabajo</strong> realizada correctamente.";
	mysqli_close($conexion);
}

if (isset($msjs)) {
	include_once '../validacion/mensajeConfirmacion.php';
}
 ?>