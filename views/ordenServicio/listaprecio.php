<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista Precio</title>
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
              <li><a href="../clientes.php">Clientes</a></li>          
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
                  <li><a href="../../../index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
                  <li><a href="listaprecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
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
    </nav>
    <br><br><br>
    <!-- end nav menu -->
     <nav class="navbar navbar-static-top">
      <div class="container">
        <center>
          <h3>Lista de Precios</h3>
        </center>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="../../img/listaPrecio/SO.jpg" width="128">
          <div class="caption">
            <h3>Sistema Operativo</h3>
            <p>Instalación de Sistema Operativos, incluye todos los programas básico para un funcionanmiento totalmente básico de la PC.</p>
            <ul>
              <li>PC - Escritorio <strong>$ 400</strong></li>
              <li>Notebook <strong>$ 450</strong></li>
              <li>Notbook <strong>$ 450</strong></li>
              <li>All in One <strong>$ 450</strong></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="../../img/listaPrecio/virus.jpg" width="128">
          <div class="caption">
            <h3>Virus</h3>
            <p>Detección y eliminación de virus y/o espías </p>
            <ul>
              <li><strong>$ 300</strong></li>
            </ul>
          </div>
        </div>  
      </div>
    </div>  
		<div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="../../img/listaPrecio/office.png" width="128">
        <div class="caption">
          <h3>Paquete de Office</h3>
          <p>La instalación de cualquier paquete de office, incluye todos los programas básicos de procesamiento de oficina.</p>
          <ul>
            <li><strong>$ 100</strong></li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="../../img/listaPrecio/limpieza.jpg" width="128">
        <div class="caption">
          <h3>Limpieza Hardware - Software</h3>
          <p>Limpia el registro, defragmentacion del disco rigido, etc y se limpian los componentes separados, se cambia grasa térmica, y se detecta posible futuras fallas</p>
          <ul>
            <li><strong>$ 200</strong></li>
          </ul>
        </div>
        </div>    
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="../../img/listaPrecio/chipvideo.jpg" width="128">
        <div class="caption">
          <h3>Resoldado Chip Video</h3>
          <p>Resoldado del Chip de Video.</p>
          <ul>
            <li>Entre<strong>$ 300</strong> y <strong>$ 500</strong></li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="../../img/listaPrecio/pin.jpg" width="128">
        <div class="caption">
          <h3>Reparación Pin de Carga ó Carcaza</h3>
          <p></p>
          <ul>
            <li><strong>$ 400</strong></li>
          </ul>
        </div>
        </div>    
      </div>
    </div>
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
