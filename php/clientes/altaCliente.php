<?php 
	require_once '../conexion.php';

	//Inicialización de Variables.
	if (isset($_REQUEST['direccion'])) {
		$direccion = $_REQUEST['direccion'];
		} else {
		$direccion = '';
	}

	if (isset($_REQUEST['localidad'])) {
		$localidad = $_REQUEST['localidad'];
	} else {
		$localidad = '';
	}
	
	if (isset($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email = '';
	}
	
	if (isset($_REQUEST['provincia'])) {
		$provincia = $_REQUEST['provincia'];
	} else {
		$provincia = '';
	}
	

	$consulta = "INSERT INTO clientes (nombre, apellido, direccion, telefono, email, localidad, provincia) 
					VALUES (
					'$_REQUEST[nombre]',
					'$_REQUEST[apellido]',
					'$direccion', 
					'$_REQUEST[telefono]',  
					'$email',  
					'$localidad',
					'$provincia')";
	mysqli_query($conexion, $consulta) or die("Problemas con la consulta que quiero realizar".mysqli_error($conexion));
	echo "true";
	mysqli_close($conexion);
?>