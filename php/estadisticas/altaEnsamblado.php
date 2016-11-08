<?php 
	require_once '../conexion.php';

	//Articulo Ensamblado
	if (empty($_REQUEST['articulo_ensamblado_text'])) {
		if (!empty($_REQUEST['articulo_ensamblado_select'])) {
			if (strlen($_REQUEST['articulo_ensamblado_select']) > 85) {
			$errors [] = "</br>El <strong>Articulo</strong> debe ser menor que 85.";
			}else {
				$articulo_ensamblado = trim($_REQUEST['articulo_ensamblado_select']);
			}
		} else {
		$errors [] = "</br>El <strong>Articulo de Ensamblado select</strong>, esta vacio.";
		}
	}else{
		if (!empty($_REQUEST['articulo_ensamblado_text'])) {
			if (strlen($_REQUEST['articulo_ensamblado_text']) > 85) {
			$errors [] = "</br>El <strong>Articulo</strong> debe ser menor que 85.";
			}else {
				$articulo_ensamblado = trim($_REQUEST['articulo_ensamblado_text']);
			}
		} else {
		$errors [] = "</br>El <strong>Articulo de Ensamblado text</strong>, esta vacio.";
		}
	}
	
	//Cantidad de Ensamblado
	if (!empty($_REQUEST['cantidad_ensamblado'])) {
		if (strlen($_REQUEST['cantidad_ensamblado']) > 3) {
			$errors[] = "</br>El <strong>Cantidad de Ensamblado</strong> debe ser menor que 2.";
		}else{
			$cantidad_ensamblado = trim($_REQUEST['cantidad_ensamblado']);
		}
	} else {
		$errors [] = "</br>El <strong>Cantidad de Ensamblado</strong>, esta vacio.";
	}

	if (isset($_REQUEST['fecha_ensamblado'])) {
		if (!empty($_REQUEST['fecha_ensamblado'])) {
			$fecha_ensamblado = date('Y-m-d',strtotime($_REQUEST['fecha_ensamblado']));
		} else {
			$errors [] = "</br>El <strong>Fecha de Ensamblado</strong>, esta vacio.";		
		}
	} else {
		$fecha_ensamblado = '';	
	}
	
	if (isset($errors)) {
		include_once '../validacion/mensajeError.php';
		} else {
			$consulta = "INSERT INTO ensamblado (articulo_ensamblado, cantidad_ensamblado, fecha_ensamblado) 
							VALUES (
							'$articulo_ensamblado',
							'$cantidad_ensamblado',
							'$fecha_ensamblado')";
			mysqli_query($conexion, $consulta) or die("Problemas: Consulta --> ALTA DE ENSAMBLADO".mysqli_error($conexion));
			mysqli_close($conexion);
			$msjs [] = "<br> Alta de <strong>Ensamblado</strong> realizada con Éxito! </br>";
		}

	if (isset($msjs)) {
		include_once '../validacion/mensajeConfirmacion.php';
	} ?>