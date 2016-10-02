<?php 
require_once '../conexion.php';

$consultaUpdate = "UPDATE productos set estado = 2 WHERE idProducto ='$_REQUEST[idProducto]'";
$m = mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));
if ($m) {
	echo "CONSULTA REALIZADA CON TOTAL NORMALIDAD de UPDATE";	
} else {
	echo "error";
}

if (!empty($_REQUEST['cambioProducto']) OR !empty($_REQUEST['otrosProductos'])) {
	$cambioProdusctos = $_REQUEST['cambioProducto'] ." ". $_REQUEST['otrosProductos'];	
} else {
	$cambioProdusctos = 'No hubo ningun cambio.';
}
$consulta = "INSERT INTO trabajos (idProducto, trabajoRealizado, cambioProducto, observaciones, garantia, presupuesto) 
				VALUES (
				'$_REQUEST[idProducto]',
				'$_REQUEST[trabajoRealizado]',
				'$cambioProdusctos',
				'$_REQUEST[observaciones]',
				'$_REQUEST[garantia]',
				'$_REQUEST[presupuesto]')";
mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert trabajos Nuevos".mysqli_error($conexion));
echo "CONSULTA REALIZADA CON TOTAL NORMALIDAD";
mysqli_close($conexion);

 ?>