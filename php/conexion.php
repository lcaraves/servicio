<?php 
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$BD = "serviciotecnico";
	
	$conexion = mysqli_connect($localhost, $user, $password, $BD) or die ("Problemas con la conexion");
?>