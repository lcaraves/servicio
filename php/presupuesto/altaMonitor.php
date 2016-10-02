<?php 
	require_once '../conexion.php';

 	if (empty($_REQUEST['nombre'])){
		$errors[] = "Nombre vacío";
	} else 
		if (!empty($_REQUEST['nombre'])){
			$nrovisita = 0;
			$consulta = "INSERT INTO monitor (nombre, nrovisita ) 
						VALUES (
						'$_REQUEST[nombre]',
						'$nrovisita')";
			$msjConsulta = mysqli_query($conexion, $consulta) or die("Problemas con la consulta para insert ALTA MONITOR".mysqli_error($conexion));
		
			if ($msjConsulta) {
				$msj [] = "Los datos han sido guardados satisfactoriamente."; 
				} else {
					$errors[] = "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
				} 
		} else {
			$errors [] = "Error desconocido.";
			}
		
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