<?php 
require_once '../conexion.php';

//Inicializando.
if (isset($_REQUEST['notificado'])) {
	$notificado = $_REQUEST['notificado'];
} else {
	$notificado = '';	
}

if (isset($_REQUEST['observaciones'])) {
	$observaciones = $_REQUEST['observaciones'];
} else {
	$observaciones = '';
}

if (empty($_REQUEST['fecha_hora'])) {
	$errors[] = "Fecha y Hora vacío";
} else

	if (!empty($_REQUEST['fecha_hora'])) {
		$consulta = "INSERT INTO llamadas (idProducto, notificado, observaciones, fechaHoraLlamada ) 
						VALUES (
						'$_REQUEST[idProducto]',
						'$notificado',
						'$observaciones',
						'$_REQUEST[fecha_hora]')";
		$msjConsulta = mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert Llamadas Nuevos".mysqli_error($conexion));
		
		//Update Estado
		if (!empty($notificado)) {
			$consultaUpdate = "UPDATE productos set estado = 3 WHERE idProducto ='$_REQUEST[idProducto]'";
			$msjUpdate = mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));	
		} else{
			if (empty($notificado)) {
				$consultaUpdate = "UPDATE productos set estado = 2 WHERE idProducto ='$_REQUEST[idProducto]'";
				$msjUpdate = mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));	
			}
		}	
			if ($msjUpdate) {
				$msj[] = " Estado Actualizado. ";	
			} else {
				$errors[] = " Error --> de Update";
			}
		 
		if ($msjConsulta) {
			$msj [] = " Los datos han sido guardados satisfactoriamente.";
			} 
			else {
			$errors[] = "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
		}
	}	
		
		//Para Verificar los Errores.
		if (isset($errors)){
?>
			<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> 
				<?php
					foreach ($errors as $error) {
						echo $error;
					}
				?>
			</div>
			<?php
			}
			
		if (isset($msj)){
		?>
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
					<?php
						foreach ($msj as $msjs) {
							echo $msjs;
						}
					?>
			</div>
					<?php
						}
						mysqli_close($conexion);
	
					?>
	




