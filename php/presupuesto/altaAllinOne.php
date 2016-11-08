<?php 
	require_once '../conexion.php';

 	if (empty($_REQUEST['nombre'])){
		$errors[] = "</br> El campo <strong>Nombre</strong> esta vacío.";
	} else 
		if (!empty($_REQUEST['nombre'])){

			$con = "SELECT * FROM  allinone";
			$resultado = mysqli_query($conexion, $con) or die("Problemas con la consulta para Select ALL IN ONE".mysqli_error($conexion));
			$bool = false;
			while ($row = mysqli_fetch_array($resultado)) {
				if ($row['nombre']==$_REQUEST['nombre']) {
					$errors [] = "</br>El nombre que quiere Utilizar <strong>" .$_REQUEST['nombre']. "</strong>, ya se encuentra en nuestra Base de Datos.";
					$bool = true;
				}
			}

			if ($bool == false) {
				$nrovisita = 0;
				$consulta = "INSERT INTO allinone (nombre, nrovisita ) 
							VALUES (
							'$_REQUEST[nombre]',
							'$nrovisita')";
				$msjConsulta = mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert ALTA ALL IN ONE".mysqli_error($conexion));
				if ($msjConsulta) {
					$msj [] = "</br> Los datos han sido guardados satisfactoriamente."; 
					} else {
						$errors[] = "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
					} 
			}
		} else {
			$errors [] = "Error desconocido.";
			}
		
		if (isset($errors)){
			include_once '../validacion/mensajeError.php';
		}
		if (isset($msj)){
			include_once '../validacion/mensajeConfirmacion.php';	
		}
		mysqli_close($conexion);
?>
		
	