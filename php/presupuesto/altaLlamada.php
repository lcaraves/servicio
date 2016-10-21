<?php 
	require_once '../conexion.php';

	//Campo Notificacion.
	if (isset($_REQUEST['notificado'])) {
		if (!empty($_REQUEST['notificado'])) {
			$notificado = $_REQUEST['notificado'];
			$consultaUpdate = "UPDATE productos set estado = 3 WHERE idProducto ='$_REQUEST[idProducto]'";
			mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));	
			$msjs [] = " Estado Actualizado. ";
		} else{
			$notificado = '';
			$consultaUpdate = "UPDATE productos set estado = 2 WHERE idProducto ='$_REQUEST[idProducto]'";
			mysqli_query($conexion, $consultaUpdate) or die("Problemas con la consulta para update".mysqli_error($conexion));	
			$msjs [] = " Estado Actualizado. ";
			}
	}else{
		$notificado = '';
	}
	 

	//Campo Observaciones
	if (isset($_REQUEST['observaciones'])) {
		if (!empty($_REQUEST['observaciones'])) {
			if (strlen($_REQUEST['observaciones']) > 60) {
				$errors [] = "</br> El campo <strong>observaciones</strong> es mayor que 60 caracteres.";
			}else{
				$observaciones = $_REQUEST['observaciones'];		
			}
		}else {
		$observaciones = '';
		}
	}

	//Campo Fecha - Hora
	if (empty($_REQUEST['fecha_hora'])) {
		$errors[] = "</br>El campo <strong>Fecha - Hora</strong> se encuentra vacío.";
	} else{
		$fecha_hora = $_REQUEST['fecha_hora'];
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
			}else{
				$consulta = "INSERT INTO llamadas (idProducto, notificado, observaciones, fechaHoraLlamada ) 
								VALUES (
								'$_REQUEST[idProducto]',
								'$notificado',
								'$observaciones',
								'$_REQUEST[fecha_hora]')";
				mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert Llamadas Nuevos".mysqli_error($conexion));
				$msjs [] = "</br> Los datos han sido guardados satisfactoriamente.";
				mysqli_close($conexion);
			}
			
		if (isset($msjs)){
		?>
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong>¡Bien hecho!</strong>
					<?php
						foreach ($msjs as $msj) {
							echo $msj;
						}
					?>
			</div>
			<?php
				}
			?>
	




