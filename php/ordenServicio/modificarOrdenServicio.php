<?php 
	require_once '../conexion.php';
	//Datos a modificar
	$idProducto = $_REQUEST['idProducto'];
	$codigo = $_REQUEST['codigo'];
	$serial = $_REQUEST['serial'];
	$accesorios = $_REQUEST['accesorios'];
	$estadoEquipo = $_REQUEST['estadoEquipo'];

	if (isset($_REQUEST['fallaCliente'])) {
		if (!empty($_REQUEST['fallaCliente'])) {
			if (strlen($_REQUEST['fallaCliente'])>100) {
				$errors [] = "</br>El campo <strong>Falla de Cliente</strong> es mayor de 100 Caracteres.";
			} else{
				$fallaCliente = $_REQUEST['fallaCliente'];		
			}
		}  else {
			$errors [] = '</br>El campo <strong>Falla de Cliente</strong> es Vacio ';
		}
	}
	
	
	//Control de Errores
	if (isset($errors)) {
	?>
		<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong> Error!!</strong> 
			<?php
				foreach ($errors as $error) {
					echo $error;
				}
			?>
		</div>
	<?php 
	}else{
		$consultaModif = "UPDATE productos SET 
						serial ='".$serial."', 
						codigo ='".$codigo."', 
						accesorios ='".$accesorios."',
						estadoEquipo ='".$estadoEquipo."',
						fallaCliente ='".$fallaCliente."'
						WHERE idProducto =".$idProducto;

		mysqli_query($conexion, $consultaModif) or die("Problema con la consulta de modificacion de Orden de Servicio".mysql_error($consultaModif));
		$msjs [] = "</br> Modificación de Orden de Servicio, Realizada con Exito";
	}

	if (isset($msjs)) {
				?>
					<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong> Bien Hecho!!</strong> 
						<?php
							foreach ($msjs as $msj) {
								echo $msj;
							}
						?>
					</div>
				<?php 	
				}	
	mysqli_close($conexion);		
	?>

	
 