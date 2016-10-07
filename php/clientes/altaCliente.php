<?php 
	require_once '../conexion.php';

	//Inicialización Nombre.
	if (isset($_REQUEST['nombre'])) {
		if (!empty($_REQUEST['nombre'])) {
			if (strlen($_REQUEST['nombre'])>25) {
				$errors [] = "</br>El campo <strong>nombre</strong> es mayor de 25 Caracteres.";
			}else{
				$nombre = $_REQUEST['nombre'];
			}
		}else{
			$errors [] = "</br>El campo <strong>nombre</strong>, esta vacío.";
		}
	}

	//Inicialización Apellido.
	if (isset($_REQUEST['apellido'])) {
		if (!empty($_REQUEST['apellido'])) {
			if (strlen($_REQUEST['apellido'])>20) {
				$errors [] = "</br>El campo <strong>apellido</strong> es mayor de 20 Caracteres.";
			}else{
				$apellido = $_REQUEST['apellido'];
			}
		}else{
			$errors [] = "</br>El campo <strong>apellido</strong>, esta vacío.";
		}
	}


	//Inicialización Telefono.
	if (isset($_REQUEST['telefono'])) {
		if (!empty($_REQUEST['apellido'])) {
			if (strlen($_REQUEST['telefono'])>10) {
				$errors [] = "</br>El campo <strong>telefono</strong> es mayor de 8 Caracteres.";
			}else{
				$telefono = $_REQUEST['telefono'];
			}
		}else{
			$errors [] = "</br>El campo <strong>telefono</strong>, esta vacío.";
		}
	}

	//Inicialización Direccion.
	if (isset($_REQUEST['direccion'])) {
		$direccion = $_REQUEST['direccion'];
		} else {
		$direccion = '';
	}
	//Inicialización Localidad.
	if (isset($_REQUEST['localidad'])) {
		$localidad = $_REQUEST['localidad'];
	} else {
		$localidad = '';
	}
	//Inicialización Email.
	if (isset($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email = '';
	}
	//Inicialización Provincia.
	if (isset($_REQUEST['provincia'])) {
		$provincia = $_REQUEST['provincia'];
	} else {
		$provincia = '';
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
		$consulta = "INSERT INTO clientes (nombre, apellido, direccion, telefono, email, localidad, provincia) 
					VALUES (
					'$nombre',
					'$apellido',
					'$direccion', 
					'$telefono',  
					'$email',  
					'$localidad',
					'$provincia')";
		mysqli_query($conexion, $consulta) or die("Problemas con la consulta que quiero realizar".mysqli_error($conexion));
		$msjs [] = "El Alta de Cliente, ".$nombre." ".$apellido;
		mysqli_close($conexion);

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
	}
	
?>