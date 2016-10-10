<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ordenes</title>
  <!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="../../js/ordenservicio/ordenservicio.js"></script>
</head>
<body>
<?php 
    session_start();
      if(!isset($_SESSION["session_UsuarioNombre"])){
      header("Location: php/inicioSesion/logeo.php");
    }
  ?>
	<div class="container fluid theme-showcase" role="main">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Servicio Técnico</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../../index.php">Nueva Orden</a></li>
              <li><a href="../clientes/clientes.php">Clientes</a></li>          
            </ul>
            <div class="dropdown navbar-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                  <?php 
                    echo $_SESSION['session_UsuarioNombre'];
                   ?>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li class="dropdown-header">Orden Servicio</li>
                  <li><a href="../../index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
                  <li><a href="listaPrecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
                  <li class="dropdown-header">Presupuesto</li>
                  <li><a href="listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
                  <li><a href="../presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
                  <li><a href="../estadisticas/listadoventaservicio.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Ventas</a></li>
                  <li class="dropdown-header">Estadisticas</li>
                  <li><a href="../estadisticas/notebookEstadisticas.php">Artículo</a></li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="../../php/inicioSesion/logeo.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar Sesión</a>
                  </li>
                </ul>
              </div>
            </div><!--/.nav-collapse -->
      </div>
    </nav><!-- end nav menu -->
    <br>
    <br>
    <br>
    <nav class="navbar navbar-static-top">
      <div class="container">
        <center>
          <h3>Lista de Ordenes de Servicios</h3>
        </center>
      </div>
    </nav>
     <div class="form-inline">
       <div class="form-group col-xs-11"> 
         <div class="input-group col-xs-5">
          <span class="input-group-addon">Buscar</span>
          <input id="filtrar" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar...">
        </div>
      </div>
    </div>
    <br><br>  
    <?php 
      require_once '../../php/conexion.php';
      $consultaClientes = "SELECT * FROM productos p, clientes c WHERE p.idCliente = c.idCliente ORDER BY p.idProducto DESC LIMIT 400";
      $resultadosPro = mysqli_query($conexion, $consultaClientes) or die("PROBLEMA CON LA CONSULTA DE PRODUCTOS.");
      
     ?>  
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>#</th>
              <th>Artículo</th>
              <th>Cliente</th>
              <th>Fecha Ingreso</th>
              <th>Estado del Equipo</th>
              <th>Codigo</th>
              <th>Serial</th>
              <th>Accesorios</th>
              <th>Horario Llamada</th>
              <th>Falla del Cliente</th>
          </tr>  
        </thead>
        <?php while ($row = mysqli_fetch_array($resultadosPro)){ ?>
        <tbody class="buscar">
          <tr>
            <td id="id_<?php echo $row['idProducto'] ?>" > <?php echo $row['idProducto'] ?> </td>
            <td> <?php echo $row['articulo'] ?> </td>
            <td> <?php echo $row['nombre']." "; echo $row['apellido']?> </td>
            <td> <?php echo $row['fechaIngreso'] ?> </td>
            <td id="estadoEquipo_<?php echo $row['idProducto'] ?>" > <?php echo $row['estadoEquipo'] ?> </td>
            <td id="codigo_<?php echo $row['idProducto'] ?>" > <?php echo $row['codigo'] ?> </td>
            <td id="serial_<?php echo $row['idProducto'] ?>" > <?php echo $row['serial'] ?> </td>
            <td id="accesorios_<?php echo $row['idProducto'] ?>" > <?php echo $row['accesorios'] ?> </td>
            <td> <?php echo $row['horarioLlamada'] ?> </td>
            <td id="fallaEquipo_<?php echo $row['idProducto'] ?>" > <?php echo $row['fallaCliente'] ?> </td>
            <td>
              <div class="form-inline">            
                <button type="button" class="btn btn-primary modifOrden" id="<?php echo $row['idProducto'] ?>" data-toggle="modal" data-target="#modalModificarOrden" title="Modificar Orden">  
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
              </div>
            </td>   
          </tr>
        </tbody> 
          <?php 
          } 
          mysqli_close($conexion);
          ?>
      </table>
  </div>
  </br>
  <footer class="bd-footer text-muted">
    <div class="avbar navbar-default navbar-static-top">
      <div class="container">
          <center>
            <img src="../../img/ArwanLogoGris.jpg" alt="" width="32" class="img-circle">
            <p class="text-muted credit">
              <strong>E-mail: ventas@arwancomputacion.com.ar <br>Av. San Martin 83 | C.P. H3500CIA | Resistencia, Chaco | Tel.: (0362) 4411605 <br>
              <a href="http://www.arwancomputacion.com.ar">www.arwancomputacion.com.ar</a></strong>
            </p>
          </center>    
      </div>
    </div>
  </footer>		
</body>
</html>
<?php include('modal_ordenes/modal_modificar_orden.php') ?>
