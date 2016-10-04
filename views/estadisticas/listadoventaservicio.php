<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listado</title>
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
  <script src="../../js/estadisticas/listadopedido.js"></script>
</head>
<body>
<?php 
    session_start();
      if(!isset($_SESSION["session_UsuarioNombre"])){
      header("Location: php/inicioSesion/logeo.php");
    }
 
  require_once '../../php/conexion.php';
  $consultaPedido = "SELECT * FROM pedidoservicio ORDER BY idPedidoServicio DESC LIMIT 50";
  $resultadosPed = mysqli_query($conexion, $consultaPedido) or die("PROBLEMA CON LA CONSULTA DE CLIENTES.");
  
 ?>  
	<div class="container theme-showcase" role="main" id="actualizar-clientes">
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
              <li class="dropdown-header">Orden de Servicio</li>
              <li><a href="../../index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
              <li><a href="../ordenServicio/listaprecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
              <li class="dropdown-header">Presupuesto</li>
              <li><a href="../ordenServicio/listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
              <li><a href="../presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
              <li class="dropdown-header">Estadisticas</li>
              <li><a href="../estadisticas/notebookEstadisticas.php">Ingreso Notebook</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="../../php/inicioSesion/logeo.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  
    <br>
    <br>
    <br>
    <br>
     <div class="form-inline">
       <div class="form-group col-xs-11"> 
         <div class="input-group col-xs-5">
          <span class="input-group-addon">Buscar</span>
          <input id="filtrar" type="text" class="form-control" placeholder="Ingresa el articulo que desea Buscar...">
        </div>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaPedido">
            <span class="glyphicon glyphicon-plus"></span>  Pedido
        </button>
      </div>
    </div>
    <br>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Articulo</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th>Nº Preseupuesto</th>
            <th>Fecha Salida</th>
            <th>Acción</th>
          </tr>
        </thead>
          <?php while ($row = mysqli_fetch_array($resultadosPed)){ ?>
          <tbody class="buscar">
            <tr id="<?php echo $row['idPedidoServicio'] ?>">
              <td id="id_<?php echo $row['idPedidoServicio'] ?>"> <?php echo $row['idPedidoServicio'] ?> </td>
              <td id="articulo_<?php echo $row['idPedidoServicio'] ?>"> <?php echo $row['articulo_pedido'] ?> </td>
              <td id="fecha_<?php echo $row['idPedidoServicio'] ?>"> <?php echo $row['fecha_pedido'] ?> </td>
              <td id="estado_<?php echo $row['idPedidoServicio'] ?>"> <?php echo $row['estado_pedido'] ?> </td>
              <td id="nropresupuesto_<?php echo $row['idPedidoServicio'] ?>"> <?php echo $row['nropresupuesto_pedido'] ?> </td>
              <td id="fecha_salida_<?php echo $row['idPedidoServicio'] ?>"><?php echo $row['fecha_salida_pedido'] ?></td>
              <td>
                <div class="btn-group">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li data-toggle="modal" data-target="#modificarPedido">
                            <a href="#" class="modificarPedido" id="<?php echo $row['idPedidoServicio'] ?>">
                              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modificar
                            </a>
                        </li>  
                      </ul>
                    </li>
                  </ul>
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

<?php include("modal_listado/modal_agregar_pedido.php");?>
<?php include("modal_listado/modal_modificar_pedido.php");?>


