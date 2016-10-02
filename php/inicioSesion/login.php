 <?php 
	session_start();
    require_once '../conexion.php';

    if(isset($_SESSION["session_UsuarioNombre"])){
    	header("Location: ../../index.php");
    }

    if(isset($_POST["botonLogin"])){
    	
    	if(!empty($_POST['nombreUsuario']) && !empty($_POST['contraseniaUsuario'])) {
     		$nombreUsuario=$_POST['nombreUsuario'];
     		$contraseniaUsuario=$_POST['contraseniaUsuario'];
  
    		$consulta = "SELECT * FROM usuarios 
    								WHERE nombreUsuario='".$nombreUsuario."' AND contraseniaUsuario='".$contraseniaUsuario."'";
     		$resultados = mysqli_query($conexion, $consulta) or die ("Problemas con la consulta");
     		$totalFilas = mysqli_num_rows($resultados);
    		
     		if($totalFilas != 0) {
     			
     			while($row = mysqli_fetch_assoc($resultados)) {
     				$dbUsuarioNombre = $row['nombreUsuario'];
     				$dbUsuarioContrasenia = $row['contraseniaUsuario'];
     			}
     			
    			if($nombreUsuario == $dbUsuarioNombre && $contraseniaUsuario == $dbUsuarioContrasenia) {
     
     				$_SESSION['session_UsuarioNombre'] = $nombreUsuario;
       				header("Location: ../../index.php");
     			}
     		} 
     		else {
     
   				 $mensajeError = "Nombre de usuario ó contraseña invalida!";
     		}
     
    	} 
    	else {
     		$mensajeError = "Todos los campos son requeridos!";
    	}
    }
?>
