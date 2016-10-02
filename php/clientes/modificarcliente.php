<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idCliente = $_REQUEST['idCliente'];
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$direccion = $_REQUEST['direccion'];
	$telefono = $_REQUEST['telefono'];
	$email = $_REQUEST['email'];
	$localidad = $_REQUEST['localidad'];
	$provincia = $_REQUEST['provincia'];

	$consulta = "UPDATE clientes SET 
					nombre ='".$nombre."', 
					apellido='".$apellido."', 
					direccion ='".$direccion."', 
					telefono ='".$telefono."', 
					email ='".$email."',
					localidad ='".$localidad."',
					provincia ='".$provincia."'
					WHERE idCliente =".$idCliente;

	mysqli_query($conexion, $consulta) or die("Problema con la consulta".mysql_error($consulta));
	echo "true";
	mysqli_close($conexion);	
 ?>